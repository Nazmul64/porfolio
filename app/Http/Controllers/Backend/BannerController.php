<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('Backend.banner.create');
    }
    public function bannerstore(Request $request)
{
    $request->validate([
        'title'       => 'required|string|max:255',
        'description' => 'required|string',
        'photo'       => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);
    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = public_path('uploads/banner');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $file->move($path, $filename);
    } else {
        return back()->with('error', 'Photo upload failed.');
    }
    Banner::create([
        'title'       => $request->input('title'),
        'description' => $request->input('description'),
        'photo'       => $filename,
    ]);

    return back()->with('success', 'Banner uploaded successfully!');
}
public function bannerindex(){
    $datashow=Banner::all();
    return view('Backend.banner.index',compact('datashow'));
}
public function banneredit($id){
    $edit_banner=Banner::find($id);
    return view('Backend.banner.edit',compact('edit_banner'));
}

public function bannerupdate(Request $request, $id)
{
    // Validate the request data
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'new_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Find the banner record
    $banner = Banner::findOrFail($id);

    // Handle the photo upload if a new photo is provided
    if ($request->hasFile('new_photo')) {
        $newPhoto = $request->file('new_photo');

        // Delete the old photo if it exists
        if ($banner->photo && file_exists(public_path('uploads/banner/' . $banner->photo))) {
            unlink(public_path('uploads/banner/' . $banner->photo));
        }

        // Upload the new photo
        $filename = time() . '.' . $newPhoto->getClientOriginalExtension();
        $newPhoto->move(public_path('uploads/banner'), $filename);

        // Update the photo field
        $banner->photo = $filename;
    }

    // Update the title and description
    $banner->title = $request->input('title');
    $banner->description = $request->input('description');

    // Save the changes to the database
    $banner->save();

    // Return with a success message
    return back()->with('success', 'Data updated successfully');
}

    public function bannerdelete($id){
        $delte_banner =Banner::find($id);
        $delte_banner->delete();
        return back()->with('success','Banner  Deleted Successfully');
    }
}
