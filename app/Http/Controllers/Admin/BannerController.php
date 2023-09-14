<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    public function index(){
        $banners = Banner::latest()->get();
        return view('admin.banners.index', compact('banners'));
    }

    public function create(){
        return view('admin.banners.create');
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
        $filename = uniqid('banner') . '.' . $ext; // Generate a unique filename
        $image->move(public_path('assets/img/banners/'), $filename); // Save the file to the pub

        Banner::create([
            'image' => $filename,
            'text_1' => $request->text_1,
            'text_2' => $request->text_2,
            'text_3' => $request->text_3,
        ]);

        return redirect('/admin/banners/')->with('success', "Banner Created.");
    }

    public function show($id){
        $banner = Banner::find($id);
        if(!$banner){
            return redirect()->back()->with('error', "Banner Not Found!");
        }
        return view('admin.banners.show', compact('banner'));
    }

    public function edit($id){
        $banner = Banner::find($id);
        if(!$banner){
            return redirect()->back()->with('error', "Banner Not Found!");
        }
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, $id){
        $banner = Banner::find($id);
        if(!$banner){
            return redirect()->back()->with('error', "Banner Not Found!");
        }
        if(!$request->file('image')){
            $filename = $banner->image;
        }else{
            //delete file first
            File::delete(public_path('assets/img/banners/'.$banner->image));
            // image
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $filename = uniqid('banner') . '.' . $ext; // Generate a unique filename
            $image->move(public_path('assets/img/banners/'), $filename); // Save the file to the pub
        }
        $banner->update([
            'image' => $filename,
            'text_1' => $request->text_1,
            'text_2' => $request->text_2,
            'text_3' => $request->text_3,
        ]);
        return redirect('/admin/banners/')->with('success', "Banner Updated.");
    }

    public function delete($id){
        $banner = Banner::find($id);
        if(!$banner){
            return redirect()->back()->with('error', "Banner Not Found!");
        }
        //delete file first
        File::delete(public_path('assets/img/banners/'.$banner->image));
        Banner::destroy($id);
        return redirect()->back()->with('success', "Banner Removed.");
    }
}
