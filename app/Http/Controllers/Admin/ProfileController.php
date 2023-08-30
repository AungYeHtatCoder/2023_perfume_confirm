<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        if (auth()->user()->hasRole('Admin')) {

        return view('admin.profile.index');

    } else {

        return view('customer.profile.index');
    }
        //return view('admin.profile.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
{
    $profile = $request->file('profile');
    $ext = $profile->getClientOriginalExtension();

    if ($ext === "png" || $ext === "jpeg" || $ext === "jpg") {
        $user = User::find(Auth::user()->id);

        // Delete existed profile
        if ($user->profile) {
            File::delete(public_path('assets/img/profile/' . $user->profile));
        }

        // Image
        $filename = uniqid('profile') . '.' . $ext; // Generate a unique filename
        $profile->move(public_path('assets/img/profile/'), $filename); // Save the file to the public directory

        $user->update([
            'profile' => $filename
        ]);

        if (auth()->user()->hasRole('Admin')) {
            return redirect()->back()->with('toast_success', "Profile Updated.");
        } else {
            return redirect()->back()->with('toast_success', "Profile Updated.");
        }
    } else {
        return redirect()->back()->with('error', "Please use a valid file type!");
    }
}


    // public function profileChange(Request $request){
    //     $profile = $request->file('profile');
    //     $ext = $profile->getClientOriginalExtension();
    //     if($ext === "png" || $ext === "jpeg" || $ext === "jpg"){
    //         $user = User::find(Auth::user()->id);
    //         //delete existed profile
    //         if($user->profile){
    //             File::delete(public_path('assets/img/profile/'.$user->profile));
    //         }
    //         // image
    //         $filename = uniqid('profile') . '.' . $ext; // Generate a unique filename
    //         $profile->move(public_path('assets/img/profile/'), $filename); // Save the file to the pub

    //         $user->update([
    //             'profile' => $filename
    //         ]);
    //         return redirect()->back()->with('success', "Profile Updated.");
    //     }else{
    //         return redirect()->back()->with('error', "Please use validate file type!");
    //     }
    //}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function saveImage(UploadedFile $image)
    {
        $path = 'profile_image/' . Str::random();
        //$path = 'images/product_image';

        if (!Storage::exists($path)) {
            Storage::makeDirectory($path, 0755, true);
        }
        if (!Storage::putFileAS('public/' . $path, $image, $image->getClientOriginalName())) {
            throw new \Exception("Unable to save file \"{$image->getClientOriginalName()}\"");
        }

        return $path . '/' . $image->getClientOriginalName();
    }
}
