<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\HomeSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeSectionController extends Controller
{
    public function index(){
        $sections = HomeSection::latest()->get();
        return view('admin.homesections.index', compact('sections'));
    }

    public function create(){
        return view('admin.homesections.create');
    }

    public function store(Request $request){
        $request->validate([
            'image' => 'required',
            'text_1' => 'required',
            'text_2' => 'required',
            'text_3' => 'required',
        ]);
        // image
        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $filename = uniqid('homesection') . '.' . $ext; // Generate a unique filename
        $image->move(public_path('assets/img/homesections/'), $filename); // Save the file to the pub

        HomeSection::create([
            'image' => $filename,
            'text_1' => $request->text_1,
            'text_2' => $request->text_2,
            'text_3' => $request->text_3,
        ]);

        return redirect('/admin/homesections/')->with('success', "Home Section Created.");
    }

    public function status(Request $request, $id){
        $section = HomeSection::find($id);
        $sections = HomeSection::where('status', 1)->get();
        // return $sections->count();
        if($request->status == 0 || $sections->count() == 0){
            $section->update(['status' => $request->status]);
            return redirect()->back()->with('success', 'Status Changed.');
        }elseif($request->status == 1 && $sections->count() == 1){
            return redirect()->back()->with('error', 'Exceeded Limitations.');
        }else{
            $section->update(['status' => $request->status]);
            return redirect()->back()->with('success', 'Status Changed.');
        }
    }

    public function show($id){
        $section = HomeSection::find($id);
        if(!$section){
            return redirect()->back()->with('error', "Home Section Not Found!");
        }
        return view('admin.homesections.show', compact('section'));
    }

    public function edit($id){
        $section = HomeSection::find($id);
        if(!$section){
            return redirect()->back()->with('error', "Home Section Not Found!");
        }
        return view('admin.homesections.edit', compact('section'));
    }

    public function update(Request $request, $id){
        $section = HomeSection::find($id);
        if(!$section){
            return redirect()->back()->with('error', "Home Section Not Found!");
        }
        if(!$request->file('image')){
            $filename = $section->image;
        }else{
            //delete file first
            File::delete(public_path('assets/img/homesections/'.$section->image));
            // image
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $filename = uniqid('homesection') . '.' . $ext; // Generate a unique filename
            $image->move(public_path('assets/img/homesections/'), $filename); // Save the file to the pub
        }
        $section->update([
            'image' => $filename,
            'text_1' => $request->text_1,
            'text_2' => $request->text_2,
            'text_3' => $request->text_3,
        ]);
        return redirect('/admin/homesections/')->with('success', "Banner Updated.");
    }

    public function delete($id){
        $section = HomeSection::find($id);
        if(!$section){
            return redirect()->back()->with('error', "Home Section Not Found!");
        }
        //delete file first
        File::delete(public_path('assets/img/homesections/'.$section->image));
        HomeSection::destroy($id);
        return redirect()->back()->with('success', "Home Section Removed.");
    }
}
