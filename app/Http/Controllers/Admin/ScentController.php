<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Scent;
use Illuminate\Http\Request;

class ScentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scents = Scent::latest()->get();
        return view('admin.scent.index', compact('scents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.scent.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'scent_name' => 'required',           
        ]);
        // process the data and submit it
        $scent = new Scent();
        $scent->scent_name = $request->scent_name;       
        $scent->save();

        // redirect to the index page
        return redirect()->route('admin.scents.index')->with('toast_success', 'Perfume Scent Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $scent_detail = Scent::find($id);
        return view('admin.scent.show', compact('scent_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $scent_edit = Scent::find($id);
        return view('admin.scent.edit', compact('scent_edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validate the form data
        $request->validate([
            'scent_name' => 'required',
        ]);

        // process the data and submit it
        $scent = Scent::findOrFail($id);
        $scent->scent_name = $request->scent_name;
        $scent->save();

        // redirect to the index page
        return redirect()->route('admin.scents.index')->with('toast_success', 'Perfume Scent Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // delete
        $scent = Scent::findOrFail($id);
        $scent->delete();
        return redirect()->route('admin.scents.index')->with('toast_success', 'Perfume Scent Deleted Successfully');
    }
}