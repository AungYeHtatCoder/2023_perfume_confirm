<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Brand;
use App\Models\Admin\Scent;
use App\Models\Admin\Size;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         abort_if(Gate::denies('product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
         // latest() is a query scope that orders the results by the created_at column in descending order.
            $products = Product::with('scents')->latest()->get();
            // return $products;
            return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         abort_if(Gate::denies('product_create'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
          $brands = Brand::all();
          $scents = Scent::all()->pluck('scent_name', 'id');
          $sizes = Size::all();
          return view('admin.product.create', compact('brands', 'scents', 'sizes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'brand_id' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        // image
        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $filename = uniqid('product') . '.' . $ext; // Generate a unique filename
        $image->move(public_path('assets/img/products/'), $filename); // Save the file to the pub

        // return $request->all();

        $product = Product::create([
                    'name' => $request->name,
                    'brand_id' => $request->brand_id,
                    'image' => $filename,
                    'description' => $request->description,
                    'user_id' => Auth::user()->id
                ]);

        $p = Product::find($product->id);
        $p->scents()->sync($request->input('scents', []));

        $sizes = [];
        // return $request->sizes;

        foreach ($request->sizes as $size) {
            $sizes[] = [
                'size_id' => $size['size_id'],
                'qty' => (int) $size['qty'],
                'normal_price' => (int) $size['normal_price'],
                'discount_price' => (int) $size['discount_price']
            ];
        }
        // return $sizes;
        $p->sizes()->sync($sizes);



        return redirect(route('admin.products.index'))->with('toast_success', 'Product Created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         abort_if(Gate::denies('product_show'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
         $product = Product::find($id);
         return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         abort_if(Gate::denies('product_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
         $product = Product::find($id);
         $brands = Brand::all();
         $scents = Scent::all();
         $sizes = Size::all();
         return view('admin.product.edit', compact('product', 'brands', 'scents', 'sizes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'brand_id' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            File::delete(public_path('assets/img/products/' . $product->image));

            // Upload new image
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $filename = uniqid('product') . '.' . $ext;
            $image->move(public_path('assets/img/products/'), $filename);
        } else {
            $filename = $product->image;
        }

        $product->update([
            'name' => $request->name,
            'brand_id' => $request->brand_id,
            'image' => $filename,
            'description' => $request->description,
            'published' => $request->published,
            'user_id' => Auth::user()->id,
        ]);

        $product->scents()->sync($request->input('scents', []));

        foreach ($request->sizes as $sizeId => $sizeData) {
            $pivotData = [
                'qty' => (int)$sizeData['qty'],
                'normal_price' => (int)$sizeData['normal_price'],
                'discount_price' => (int)$sizeData['discount_price'],
            ];
            $product->sizes()->syncWithoutDetaching([$sizeId => $pivotData]);
        }

        return redirect(route('admin.products.index'))->with('toast_success', 'Product Updated.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         abort_if(Gate::denies('product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
         Product::destroy($id);
         return redirect()->back()->with('toast_success', 'Product deleted successfully.');
    }

    public function changeProductPopular($id){
        $getPopular = Product::select('popular')->where('id',$id)->first();
        if($getPopular->popular == 1){
            $popular = 0;
        }else{
            $popular = 1;
        }
        Product::where('id',$id)->update(['popular'=>$popular]);
        return redirect()->back()->with('success', "Popular Switched");
    }

    public function changeFeature($id)
{
    $product = Product::find($id);

    if ($product) {
        $product->feature = !$product->feature;
        $product->save();
    }

    return redirect()->back()->with('success', "Feature Switched"); // Redirect back to the previous page
}

}
