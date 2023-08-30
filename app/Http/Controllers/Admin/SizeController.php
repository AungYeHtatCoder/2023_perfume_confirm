<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(Gate::denies('perfume_size_access'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
        $sizes = Size::latest()->get();
        return view('admin.perfume_size.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(Gate::denies('perfume_size_create'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
        return view('admin.perfume_size.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'size_name' => 'required',
        ]);
        // process the data and submit it
        $size = new Size();
        $size->name = $request->size_name;
        $size->save();

        // redirect to the index page
        return redirect()->route('admin.sizes.index')->with('toast_success', 'Perfume Size Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort_if(Gate::denies('perfume_size_show'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
        $size_detail = Size::find($id);
        return view('admin.perfume_size.show', compact('size_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        abort_if(Gate::denies('perfume_size_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
        $size_edit = Size::find($id);
        return view('admin.perfume_size.edit', compact('size_edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // validate the form data
         $request->validate([
            'size_name' => 'required',
        ]);

        // process the data and submit it
        $size = Size::findOrFail($id);
        $size->name = $request->size_name;
        $size->save();

        // redirect to the index page
        return redirect()->route('admin.sizes.index')->with('toast_success', 'Perfume Size Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        abort_if(Gate::denies('perfume_size_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
        // delete
        $size = Size::findOrFail($id);
        $size->delete();
        return redirect()->route('admin.sizes.index')->with('toast_success', 'Perfume Size Deleted Successfully');
    }
}
