<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function servicesgcreate(){
        return view('Backend.services.create');
    }
    public function servicesstore(Request $request){
        $request->validate([
            'title' => 'nullable|string|max:255', // Field is optional but must be a string if present
            'subtitle' => 'nullable|string|max:255', // Field is optional but must be a string if present
            'maintitle' => 'required|string|max:255', // Field is mandatory and must be a string
            'maindescription' => 'required|string', // Field is mandatory and must be a string
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Field is mandatory and must be a valid image
        ]);
        
        

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/services');
    
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file->move($path, $filename);
        } else {
            return back()->with('error', 'Photo upload failed.');
        }
        Service::create([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'maintitle'=>$request->maintitle,
            'maindescription'=>$request->maindescription,
            'photo'=> $filename,
        ]);
        return back()->with('success','Services Store');
    }
    public function servicesindex(){
         $data_show=Service::all();
        return view('Backend.services.index',compact('data_show'));
    }
    public function servicesedit($id){
        $services_edit=Service::find($id);
        return view('Backend.services.edit',compact('services_edit'));
    }
    public function servicesupdate(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        if ($request->hasFile('new_photo')) {
            $file = $request->file('new_photo');
            if ($file) {
                $oldPhotoPath = public_path('uploads/services/' . $service->photo);
                if (file_exists($oldPhotoPath)) {
                    unlink($oldPhotoPath);
                }
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = public_path('uploads/services'); 
                $file->move($path, $filename);
                $service->update(['photo' => $filename]);
            }
        }
    
        $service->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'maintitle' => $request->maintitle,
            'maindescription' => $request->maindescription,
        ]);
    
        return back()->with('success', 'Data updated successfully');
    }
    public function servicesdelete($id){
        $delete=Service::find($id);
        $delete->delete();
        return back()->with('success', 'Data deleted successfully');
    }
}
