<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallerycreate(){
        return view('Backend.gallery.create');
    }
    public function gallerystore(Request $request){
        $request->validate([
           'photo'=>'required',
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $fileName = date('ymdhi') . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/gallery'), $fileName);
        }
        Gallery::create([
            'photo'=>$fileName,
        ]);
        return back()->with('success','Data insert successfully');
    }
    public function galleryindex(){
        $datashow=Gallery::all();
        return view('Backend.gallery.index',compact('datashow'));
    }
    public function galleryedit($id){
        $edit_data=Gallery::find($id);
        return view('Backend.gallery.edit',compact('edit_data'));
    }
    public function galleryupdate(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'new_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max size if needed
        ]);

        // Find the gallery record
        $gallery = Gallery::find($id);
        if (!$gallery) {
            return back()->with('error', 'Gallery item not found');
        }

        if ($request->hasFile('new_photo')) {
            // Check and delete the existing photo
            if ($gallery->photo && file_exists(public_path('uploads/gallery/' . $gallery->photo))) {
                unlink(public_path('uploads/gallery/' . $gallery->photo));
            }

            // Upload new photo
            $file = $request->file('new_photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/gallery');

            if (!file_exists($path)) {
                mkdir($path, 0777, true); // Create directory if it doesn't exist
            }

            $file->move($path, $filename);

            // Update photo in database
            $gallery->update([
                'photo' => $filename,
            ]);
        }

        return back()->with('success', 'Data updated successfully');
    }

    public function gallerydelete($id){
        $delete =Gallery::find($id);
        $delete->delete();
        return back()->with('success','Data delete Successfully');
    }
}
