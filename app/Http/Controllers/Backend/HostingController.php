<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hosting;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class HostingController extends Controller
{
    public function hostingsgcreate(){
        return view('Backend.hosting.create');
    }
    public function hostingsstore(Request $request){
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'clouddatabases' => 'required|string',
            'filestorage' => 'required|string',
            'forextrading' => 'required|string',
            'filebackups' => 'required|string',
            'remotedesktop' => 'required|string',
            'websitehosting' => 'required|string',
            'hybridcloud' => 'required|string',
            'photo'       => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', 
        ]);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/hosting');
    
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file->move($path, $filename);
        } else {
            return back()->with('error', 'Photo upload failed.');
        }
        Hosting::create([
            'title'       => $request->input('title'),
            'description' => $request->input('description'),
            'clouddatabases' => $request->input('clouddatabases'),
            'filestorage' => $request->input('filestorage'),
            'forextrading' => $request->input('forextrading'),
            'filebackups' => $request->input('filebackups'),
            'websitehosting' => $request->input('websitehosting'),
            'remotedesktop' => $request->input('remotedesktop'),
            'emailservers' => $request->input('emailservers'),
            'hybridcloud' => $request->input('hybridcloud'),
            'photo'       => $filename,
        ]);
        return back()->with('success','Data upload successfully');
    }
    public function hostingsindex(){
        $data=Hosting::all();
        return view('Backend.hosting.index',compact('data'));
    }
    public function hostingsedit($id){
        $edit_hosting=Hosting::find($id);
        return view('Backend.hosting.edit',compact('edit_hosting'));
    }
    public function hostingsupdate(Request $request, $id)
{
    $hosting = Hosting::findOrFail($id);

    // Handle new photo upload
    if ($request->hasFile('new_photo')) {
        $file = $request->file('new_photo');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = public_path('uploads/hosting');

        // Delete old photo if exists
        if (!empty($hosting->photo) && file_exists($path . '/' . $hosting->photo)) {
            unlink($path . '/' . $hosting->photo);
        }

        // Move the new photo
        $file->move($path, $filename);

        // Update the photo field
        $hosting->photo = $filename;
    }

    // Update other fields
    $hosting->update([
        'title'           => $request->input('title'),
        'description'     => $request->input('description'),
        'clouddatabases'  => $request->input('clouddatabases'),
        'filestorage'     => $request->input('filestorage'),
        'forextrading'    => $request->input('forextrading'),
        'filebackups'     => $request->input('filebackups'),
        'websitehosting'  => $request->input('websitehosting'),
        'remotedesktop'   => $request->input('remotedesktop'),
        'emailservers'    => $request->input('emailservers'),
        'hybridcloud'     => $request->input('hybridcloud'),
        'photo'           => $hosting->photo, // Update the photo field
    ]);

    return back()->with('success', 'Data updated successfully');
}

    public function hostingsdelete($id){
        $delte_banner =Hosting::find($id);
        $delte_banner->delete();
        return back()->with('success','Hostings  Deleted Successfully');
    }
}
