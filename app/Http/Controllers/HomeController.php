<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin\Order;
use App\Models\Admin\Size;
use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //return view('admin.dashboard');
         if (auth()->user()->hasRole('Admin')) {
        // order limit 10 
        $sold_out_orders = Order::all();
        $orders = Order::orderBy('id', 'desc')->limit(10)->get();

        
        // Count the number of products sold in orders with status 'completed'
        $soldProductsCount = 0;
        $completedOrders = Order::where('status', 'completed')->with('products')->get();

        foreach ($completedOrders as $order) {
            $soldProductsCount += $order->products->count();
        }
        $salesTarget = 1000; // or whatever your target is
        $progressPercentage = ($soldProductsCount / $salesTarget) * 100;

        // Get today's sales
    $salesByDay = DB::table('orders')
        ->select(DB::raw('sum(sub_total) as total_sales'), DB::raw('DATE(created_at) as date'))
        ->whereDate('created_at', Carbon::today())
        ->groupBy(DB::raw('DATE(created_at)'))
        ->get();

    // Get this week's sales
    $salesByWeek = DB::table('orders')
        ->select(DB::raw('sum(sub_total) as total_sales'), DB::raw('WEEK(created_at) as week'))
        ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
        ->groupBy(DB::raw('WEEK(created_at)'))
        ->get();

    // Get this month's sales
    $salesByMonth = DB::table('orders')
        ->select(DB::raw('sum(sub_total) as total_sales'), DB::raw('MONTH(created_at) as month'))
        ->whereMonth('created_at', Carbon::now()->month)
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->get();
// month
 $monthlySales = DB::table('order_products')
        ->select(DB::raw('SUM(total_price) as total_price'), DB::raw('MONTH(created_at) as month'))
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->get();

        // Pass this variable to the view
        return view('admin.dashboard', [
            'orders' => $orders,
            'soldProductsCount' => $soldProductsCount,
            'progressPercentage' => $progressPercentage,
            'sold_out_orders' => $sold_out_orders,
            'salesByDay' => $salesByDay,
            'salesByWeek' => $salesByWeek,
            'salesByMonth' => $salesByMonth,
            'monthlySales' => $monthlySales,
        ]);

    } else {
        
        return view('frontend.profile');
    }
    }
}