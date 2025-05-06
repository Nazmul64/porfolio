<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Omsblog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogcreate(){
        return view('Backend.blog.create');
    }

    public function blogstore(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'details_title' => 'nullable|string',
            'details_description' => 'nullable|string',
            'main_photo' => 'required|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'details_photo' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
        ]);
    
        // Handle file uploads
        if ($request->hasFile('main_photo')) {
            $file = $request->file('main_photo');
            $main_photo = date('YmdHis') . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/blog'), $main_photo);
        }
    
        if ($request->hasFile('details_photo')) {
            $file = $request->file('details_photo');
            $details_photo = date('YmdHis') . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/blog'), $details_photo);
        } else {
            $details_photo = null; // In case details_photo is optional
        }
    
        // Create the blog entry
        Omsblog::create([
            'title' => $request->title,
            'description' => $request->description,
            'details_title' => $request->details_title,
            'details_description' => $request->details_description,
            'main_photo' => $main_photo,
            'details_photo' => $details_photo,
        ]);
    
        return back()->with('success', 'Data inserted successfully!');
    }
    public function showBlogDetails($id)
    {
        $detailsblog = Omsblog::findOrFail($id);
        return view('Frontent.blogdetails', compact('detailsblog'));
    }
    public function blogshow()
    {
        $datashow = Omsblog::all();
        return view('Backend.blog.index', compact('datashow'));
    }
    public function Blogedit($id){
         $data_edit=Omsblog::find($id);
         return view('Backend.blog.edit',compact('data_edit'));
    }
    public function Blogupdate(Request $request, $id)
    {
        $blog = Omsblog::findOrFail($id);
        $path = public_path('uploads/blog');
    
        // Handle new_main_photo upload
        if ($request->hasFile('new_main_photo')) {
            $file = $request->file('new_main_photo');
            $new_main_photo = time() . '_main_photo.' . $file->getClientOriginalExtension();
    
            // Delete the old photo if it exists
            if (!empty($blog->main_photo) && file_exists($path . '/' . $blog->main_photo)) {
                unlink($path . '/' . $blog->main_photo);
            }
    
            // Move new file to upload directory
            $file->move($path, $new_main_photo);
            $blog->main_photo = $new_main_photo;
        }
    
        // Handle new_details_photo upload
        if ($request->hasFile('new_details_photo')) {
            $file = $request->file('new_details_photo');
            $new_details_photo = time() . '_details_photo.' . $file->getClientOriginalExtension();
    
            // Delete the old photo if it exists
            if (!empty($blog->details_photo) && file_exists($path . '/' . $blog->details_photo)) {
                unlink($path . '/' . $blog->details_photo);
            }
    
            // Move new file to upload directory
            $file->move($path, $new_details_photo);
            $blog->details_photo = $new_details_photo;
        }
    
        // Update blog record
        $blog->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'details_title' => $request->input('details_title'),
            'details_description' => $request->input('details_description'),
            'main_photo' => $blog->main_photo ?? $blog->main_photo, // Preserve existing if not updated
            'details_photo' => $blog->details_photo ?? $blog->details_photo, // Preserve existing if not updated
        ]);
    
        return back()->with('success', 'Data updated successfully!');
    }
    public function Blogdelete($id){
        $delete=Omsblog::find($id);
        $delete->delete();
        return back()->with('success', 'delete successfully!');
    }
}
