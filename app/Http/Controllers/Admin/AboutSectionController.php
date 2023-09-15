<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\AboutSection;
use Illuminate\Support\Facades\File;

class AboutSectionController extends Controller
{
    public function index(){
        $sections = AboutSection::latest()->get();
        return view('admin.aboutsections.index', compact('sections'));
    }

    public function create(){
        return view('admin.aboutsections.create');
    }

    public function store(Request $request){
        $request->validate([
            'image' => 'required',
            'header' => 'required',
            'paragraph' => 'required',
        ]);
        // image
        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $filename = uniqid('aboutsection') . '.' . $ext; // Generate a unique filename
        $image->move(public_path('assets/img/aboutsections/'), $filename); // Save the file to the pub

        AboutSection::create([
            'image' => $filename,
            'header' => $request->header,
            'paragraph' => $request->paragraph,
        ]);

        return redirect('/admin/aboutsections/')->with('success', "About Section Created.");
    }

    public function one(Request $request, $id){
        $section = AboutSection::find($id);
        $sections = AboutSection::where('one', 1)->get();
        // return $sections->count();
        if($request->one == 0 || $sections->count() == 0){
            $section->update(['one' => $request->one]);
            return redirect()->back()->with('success', 'Section One Changed.');
        }elseif($request->one == 1 && $sections->count() == 1){
            return redirect()->back()->with('error', 'Exceeded Limitations.');
        }else{
            $section->update(['one' => $request->one]);
            return redirect()->back()->with('success', 'Section One Changed.');
        }
    }

    public function two(Request $request, $id){
        $section = AboutSection::find($id);
        $sections = AboutSection::where('two', 1)->get();
        // return $sections->count();
        if($request->two == 0 || $sections->count() == 0){
            $section->update(['two' => $request->two]);
            return redirect()->back()->with('success', 'Section Two Changed.');
        }elseif($request->two == 1 && $sections->count() == 1){
            return redirect()->back()->with('error', 'Exceeded Limitations.');
        }else{
            $section->update(['two' => $request->two]);
            return redirect()->back()->with('success', 'Section Two Changed.');
        }
    }

    public function show($id){
        $section = AboutSection::find($id);
        if(!$section){
            return redirect()->back()->with('error', "About Section Not Found!");
        }
        return view('admin.aboutsections.show', compact('section'));
    }

    public function edit($id){
        $section = AboutSection::find($id);
        if(!$section){
            return redirect()->back()->with('error', "Home Section Not Found!");
        }
        return view('admin.aboutsections.edit', compact('section'));
    }

    public function update(Request $request, $id){
        $section = AboutSection::find($id);
        if(!$section){
            return redirect()->back()->with('error', "About Section Not Found!");
        }
        if(!$request->file('image')){
            $filename = $section->image;
        }else{
            //delete file first
            File::delete(public_path('assets/img/aboutsections/'.$section->image));
            // image
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $filename = uniqid('aboutsection') . '.' . $ext; // Generate a unique filename
            $image->move(public_path('assets/img/aboutsections/'), $filename); // Save the file to the pub
        }
        $section->update([
            'image' => $filename,
            'header' => $request->header,
            'paragraph' => $request->paragraph,
        ]);
        return redirect('/admin/aboutsections/')->with('success', "About Section Updated.");
    }

    public function delete($id){
        $section = AboutSection::find($id);
        if(!$section){
            return redirect()->back()->with('error', "About Section Not Found!");
        }
        //delete file first
        File::delete(public_path('assets/img/aboutsections/'.$section->image));
        AboutSection::destroy($id);
        return redirect()->back()->with('success', "About Section Removed.");
    }
}
