<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class BrandCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(Gate::denies('brand_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
        // get all categories by ascending order
        $categories = Category::all();
        return view('admin.brand_category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         abort_if(Gate::denies('brand_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
        return view('admin.brand_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate the form data
        $request->validate([
            'brand_category_name' => 'required|unique:categories|max:255',
        ]);


        // process the data and submit it
        $category = new Category();
        $category->brand_category_name = $request->brand_category_name;
        $category->save();

        // redirect to the index page
        return redirect()->route('admin.brand_categories.index')->with('toast_success', 'Brand Category Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         abort_if(Gate::denies('brand_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
        // detail 
        $category = Category::findOrFail($id);
        return view('admin.brand_category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         abort_if(Gate::denies('brand_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
        // edit
        $category = Category::findOrFail($id);
        return view('admin.brand_category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validate the form data
        $request->validate([
            'brand_category_name' => 'required|max:255',
        ]);

        // process the data and submit it
        $category = Category::findOrFail($id);
        $category->brand_category_name = $request->brand_category_name;
        $category->save();

        // redirect to the index page
        return redirect()->route('admin.brand_categories.index')->with('toast_success', 'Brand Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         abort_if(Gate::denies('brand_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
        // delete
        $category = Category::findOrFail($id);
        $category->delete();

        // redirect to the index page
        return redirect()->route('admin.brand_categories.index')->with('toast_success', 'Brand Category Deleted Successfully');
    }
}