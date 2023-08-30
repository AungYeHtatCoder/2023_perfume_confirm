<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
class BrandController extends Controller
{
    /**
     * brand_access
     * Display a listing of the resource.
     */
    public function index()
    {
         abort_if(Gate::denies('brand_access'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
        // get all brands by ascending order
        $brands = Brand::latest()->get();
        return view('admin.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
     abort_if(Gate::denies('brand_create'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
    // Get all categories by ascending order
    $categories = Category::all()->pluck('brand_category_name', 'id');
    return view('admin.brand.create', compact('categories'));
}

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    // validate the form data
    $request->validate([
        'brand_name' => 'required|unique:brands|max:255',
        'category_id' => 'required',
        'branch_logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // process the data and submit it
    $logoPath = $request->file('branch_logo')->store('brand_logo', 'uploads');

    Brand::create([
        'brand_name' => $request->brand_name,
        'category_id' => $request->category_id,
        'branch_logo' => $logoPath, // Assuming the field in the 'brands' table is 'logo'
    ]);

    // redirect to the index page
    return redirect()->route('admin.brands.index')->with('toast_success', 'Brand Added Successfully');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         abort_if(Gate::denies('brand_show'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
        // detail
        $brand_detail = Brand::findOrFail($id);
        return view('admin.brand.show', compact('brand_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         abort_if(Gate::denies('brand_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
        // get all categories by ascending order
        $categories = Category::all();
        // detail
        $brand_edit = Brand::findOrFail($id);
        return view('admin.brand.edit', compact('brand_edit', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // validate the form data
        $request->validate([
            'brand_name' => 'required|max:255',
            'category_id' => 'required',
        ]);

        $brand = Brand::findOrFail($id);
        $brand->brand_name = $request->input('brand_name');
        $brand->category_id = $request->input('category_id');

        // Update logo if a new one is provided
        if ($request->hasFile('branch_logo')) {
            $this->updateLogo($brand, $request->file('branch_logo'));
        }

        $brand->save();

        // redirect to the index page
        return redirect()->route('admin.brands.index')->with('toast_success', 'Brand Updated Successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         abort_if(Gate::denies('brand_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
        // delete
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return redirect()->route('admin.brands.index')->with('toast_success', 'Brand Deleted Successfully');
    }


    protected function updateLogo(Brand $brand, $logoFile)
    {
        // Delete the old logo if exists
        if ($brand->branch_logo) {
            Storage::disk('uploads')->delete($brand->branch_logo);
        }

        // Store the new logo
        $logoPath = $logoFile->store('brand_logo', 'uploads');
        $brand->branch_logo = $logoPath;
    }
}