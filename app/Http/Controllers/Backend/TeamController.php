<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Ourteam;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class TeamController extends Controller
{
    public function Teamcrate(){
        return view('Backend.team.create');
    }
    public function Teamcstore(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            // 'title' => 'nullable',
            // 'description' => 'nullable',
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'maindescription' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);
    
        // Initialize file name
        $fileName = null;
    
        // Check if a photo is uploaded and handle the file upload
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $fileName = date('ymdhi') . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/team'), $fileName);
        }
    
        // Store data in the database
        Ourteam::create([
            // 'title' => $request->title,
            // 'description' => $request->description,
            'position' => $request->position,
            'name' => $request->name,
            'maindescription' => $request->maindescription,
            'photo' => $fileName,
        ]);
    
        // Redirect with a success message
        return back()->with('success', 'Team uploaded successfully!');
    }
    public function Teamindex(){
        $data_show=Ourteam::all();
        return view('Backend.team.index',compact('data_show'));
    }
    public function Teamedite($id) {
        $team = Ourteam::find($id); 
        if (!$team) {
            return redirect()->back()->with('error', 'Team not found.');
        }
        return view('Backend.team.edit', compact('team'));
    }
    
 public function Teamupdate(Request $request, $id) {
    $teamMember = Ourteam::find($id);
    
    if (!$teamMember) {
        return back()->with('error', 'Team member not found.');
    }

    $filename = $teamMember->photo; // Default to the existing photo
    
    if ($request->hasFile('new_photo')) {
        $file = $request->file('new_photo');
        
        if ($file) {
            // Delete old photo if it exists
            $oldPhotoPath = public_path('uploads/team/' . $teamMember->photo);
            if (file_exists($oldPhotoPath) && $teamMember->photo) {
                unlink($oldPhotoPath);
            }
            
            // Save new photo
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/team');
            $file->move($path, $filename);
        }
    }

    // Update the team member data
    $teamMember->update([
        'position' => $request->position,
        'name' => $request->name,
        'maindescription' => $request->maindescription,
        'photo' => $filename,
    ]);

    return back()->with('success', 'Data updated successfully.');
}

    public function Teamdelete($id){
        $delete = Ourteam::find($id);
        $delete->delete();
        return back()->with('success','Team Delete Successfully');
    }
}
