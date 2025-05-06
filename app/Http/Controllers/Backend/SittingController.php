<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use App\Models\Sitting;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class SittingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function settingcreate()
    {
        return view('Backend.setting.create');
    }
    public function settingstore(Request $request)
    {
        // Validate input
        $request->validate([
            'description' => 'required',
            'address'     => 'required',
            'gmail'       => 'required|email',
            'phone'       => 'required',
            'facebook'    => 'required|url',
            'youtube'     => 'required|url',
            'whatsapp'    => 'required|url',
            'instragram'   => 'required|url',
            'linkdine'    => 'required|url',
            'icon'        => 'required|image|mimes:jpeg,png,svg',
            'photo'       => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
    
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/settings');
    
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file->move($path, $filename);
        } else {
            return back()->with('error', 'Photo upload failed.');
        }
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $icon = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/settings');
    
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file->move($path, $icon);
        } else {
            return back()->with('error', 'Photo upload failed.');
        }
    
        Sitting::create([
            'description' => $request->description,
            'address'     => $request->address,
            'gmail'       => $request->gmail,
            'phone'       => $request->phone,
            'facebook'    => $request->facebook,
            'youtube'     => $request->youtube,
            'whatsapp'    => $request->whatsapp,
            'instragram'   => $request->instragram,
            'linkdine'    => $request->linkdine, 
            'photo'        => $filename,
            'icon'       => $icon,
        ]);
    
        return back()->with('success', 'Settings saved successfully!');
    }
    public function settingindex(){
        $setting=Sitting::all();
        return view('Backend.setting.index',compact('setting'));
    }
    public function settingedit($id){
        $setting_edite=Sitting::find($id);
        return view('Backend.setting.edit',compact('setting_edite'));
    }
    public function settinupdate(Request $request, $id)
    {
        // Fetch the Sitting record once to avoid multiple database calls
        $sitting = Sitting::find($id);
    
        if (!$sitting) {
            return back()->with('error', 'Record not found.');
        }
    
        // Handle photo update
        if ($request->hasFile('new_photo')) {
            $newPhoto = $request->file('new_photo');
            if ($newPhoto) {
                // Delete the existing photo if it exists
                $existingPhotoPath = public_path('uploads/settings/' . $sitting->photo);
                if (file_exists($existingPhotoPath)) {
                    unlink($existingPhotoPath);
                }
    
                // Save the new photo
                $photoFilename = time() . '.' . $newPhoto->getClientOriginalExtension();
                $newPhoto->move(public_path('uploads/settings'), $photoFilename);
                $sitting->photo = $photoFilename;
            }
        }
    
        // Handle icon update
        if ($request->hasFile('icon_new_photo')) {
            $newIcon = $request->file('icon_new_photo');
            if ($newIcon) {
                // Delete the existing icon if it exists
                $existingIconPath = public_path('uploads/settings/' . $sitting->icon);
                if (file_exists($existingIconPath)) {
                    unlink($existingIconPath);
                }
    
                // Save the new icon
                $iconFilename = time() . '.' . $newIcon->getClientOriginalExtension();
                $newIcon->move(public_path('uploads/settings'), $iconFilename);
                $sitting->icon = $iconFilename;
            }
        }
    
        // Update other fields
        $sitting->update([
            'description' => $request->description,
            'address'     => $request->address,
            'gmail'       => $request->gmail,
            'phone'       => $request->phone,
            'facebook'    => $request->facebook,
            'youtube'     => $request->youtube,
            'whatsapp'    => $request->whatsapp,
            'instragram'  => $request->instragram,
            'linkdine'    => $request->linkdine,
        ]);
    
        return back()->with('success', 'Data updated successfully');
    }
    public function sittingdelete($id){
        $setting_delete=Sitting::find($id);
        $setting_delete->delete();
        return back()->with('success', 'Data Delete successfully');
    }
    
}
