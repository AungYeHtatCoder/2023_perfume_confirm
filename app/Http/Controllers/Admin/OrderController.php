<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Cart;
use App\Models\Admin\Order;
use App\Models\Admin\OrderProduct;
use App\Models\Admin\Product;
use App\Models\Admin\Size;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function index(){
        $orders = Order::latest()->get();
        $users = User::all();
        // return $orders;
        return view('admin.orders.orders', compact('orders', 'users'));
    }

    public function show($id){
        $order = Order::find($id);
        $users = User::all();
        $products = Product::all();
        $sizes = Size::all();
        return view('admin.orders.show', compact('order', 'users', 'products', 'sizes'));
    }

    public function delete($id){
        Order::destroy($id);
        return redirect()->back()->with('success', "Order Deleted");
    }

    public function statusChange(Request $request, $id){
        $request->validate([
            'status' => 'required'
        ]);
        $order = Order::find($id);
        if(!$order){
            return redirect()->back()->with('error', "Order Not Found!");
        }
        $order->update([
            'status' => $request->status
        ]);
        return redirect()->back()->with('success', "Order Status Changed");
    }

    public function store(Request $request){
        $request->validate([
            'phone' => 'required',
            'address' => 'required',
        ]);
        $user = User::find(Auth::user()->id);
        $user->update([
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        return redirect()->back()->with('success', "Delivery Information Added.");
    }

    public function placeOrder(Request $request){
        $user = User::find(Auth::user()->id);
        $carts = Cart::where('user_id', Auth::user()->id)->with(['products', 'sizes'])->get();
        if($user->phone && $user->address){
            $request->validate([
                'payment_method' => 'required'
            ]);
            if($request->payment_method === "Cash On Delivery"){
                $order = Order::create([
                    'user_id' => Auth::user()->id,
                    'sub_total' => $carts->sum('total_price'),
                    'payment_method' => $request->payment_method,
                    'order_note' => $request->order_note ? $request->order_note : ""
                ]);
            }else{
                if(!$request->file('payment_photo')){
                    return redirect()->back()->with('error', "Payment Slip must be inserted.");
                }
                // image
                $image = $request->file('payment_photo');
                $ext = $image->getClientOriginalExtension();
                $filename = uniqid('payment') . '.' . $ext; // Generate a unique filename
                $image->move(public_path('assets/img/payments/'), $filename); // Save the file to the pub

                $order = Order::create([
                    'user_id' => Auth::user()->id,
                    'sub_total' => $carts->sum('total_price'),
                    'payment_method' => $request->payment_method,
                    'payment_photo' => $filename,

                ]);
            }
            foreach($carts as $cart){
                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $cart->product_id,
                    'size_id' => $cart->size_id,
                    'qty' => $cart->qty,
                    'total_price' => $cart->total_price,
                ]);

                $product = Product::find($cart->product_id);

                $sizeId = $cart->size_id;
                $qtyToSubtract = (int)$cart->qty;

                $product->sizes()->updateExistingPivot($sizeId, ['qty' => DB::raw("qty - $qtyToSubtract")]);

            }
            Cart::where('user_id', Auth::user()->id)->delete();
            return redirect('/order-success/'.$order->id)->with('success', "Order Submitted Successfully.");

        }else{
            return redirect()->back()->with('error', "Delivery Information is required!");
        }
    }

    public function orderSuccess($id){
        if(Auth::check()){
            $order = Order::with('order_products')->where('id', $id)->where('user_id', Auth::user()->id)->first();
            if(!$order){
                return redirect()->back()->with('error', "Order Not Found!");
            }
            $products = Product::all();
            $sizes = Size::all();
            return view('frontend.order-success', compact('order', 'products', 'sizes'));
        }else{
            return redirect()->back()->with('error', 'Please Login!');
        }
    }

}
