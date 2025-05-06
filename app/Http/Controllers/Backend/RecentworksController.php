<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Recentworks;
use App\Models\Settings;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class RecentworksController extends Controller
{
    public function recentcrate(){
        return view('Backend.recentworks.create');
    }
    public function recentstore(Request $request)
    {
        $request->validate([
            'projecttitle' => 'required|string|max:255',
            'projectdescription' => 'required|string',
            'detailstitle' => 'required|string|max:255',
            'detailsdescription' => 'required|string',
            'clientname' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'date' => 'required|date',
            'livepreview' => 'required|url',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'detailsphoto.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
    
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $photoFileName = date('mdyhi') . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/recentworks'), $photoFileName);
        }

        if ($request->file('detailsphoto')) {
            $file = $request->file('detailsphoto');
            $detailsphoto = date('mdyhi') . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/recentworks'), $detailsphoto);
        }
        if ($request->file('detailsphoto1')) {
            $file = $request->file('detailsphoto1');
            $detailsphoto1 = date('mdyhi') . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/recentworks'), $detailsphoto1);
        }
        if ($request->file('detailsphoto2')) {
            $file = $request->file('detailsphoto2');
            $detailsphoto2 = date('mdyhi') . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/recentworks'), $detailsphoto);
        }
        if ($request->file('detailsphoto3')) {
            $file = $request->file('detailsphoto3');
            $detailsphoto3 = date('mdyhi') . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/recentworks'), $detailsphoto3);
        }
        
        Recentworks::create([
            'projecttitle' => $request->projecttitle,
            'projectdescription' => $request->projectdescription,
            'detailstitle' => $request->detailstitle,
            'detailsdescription' => $request->detailsdescription,
            'clientname' => $request->clientname,
            'category' => $request->category,
            'date' => $request->date,
            'livepreview' => $request->livepreview,
            'photo' => $photoFileName,
            'detailsphoto' => $detailsphoto,
            'detailsphoto1' => $detailsphoto1, 
            'detailsphoto2' => $detailsphoto2, 
            'detailsphoto3' => $detailsphoto3, 
        ]);
    
        return back()->with('success', 'Project uploaded successfully!');
    }
    public function recesingepagedetails($id) {
        $projectdetails = Recentworks::where('id', $id)->first();
        $setting = Settings::all();
        return view('Frontent.singledetailspage', compact('projectdetails', 'setting'));
    }
 public function recentprojectindex(){
    $datashow=Recentworks::all();
    return view('Backend.recentworks.index',compact('datashow'));

 }
 public function recentprojectedit($id){
    $data_edit =Recentworks::find($id);
    return view('Backend.recentworks.edit',compact('data_edit'));
 }
 public function recentprojectupdate(Request $request, $id)
 {
     $recentwork = Recentworks::findOrFail($id);
     $path = public_path('uploads/recentworks');
 
     // Update main photo
     if ($request->hasFile('new_photo')) {
         $file = $request->file('new_photo');
         $filename = time() . '_photo.' . $file->getClientOriginalExtension();
 
         // Remove old file if it exists
         if (!empty($recentwork->photo) && file_exists($path . '/' . $recentwork->photo)) {
             unlink($path . '/' . $recentwork->photo);
         }
         $file->move($path, $filename);
         $recentwork->photo = $filename;
     }
 
     // Update details photo
     if ($request->hasFile('new_detailsphoto')) {
         $file = $request->file('new_detailsphoto');
         $detailsphoto = time() . '_detailsphoto.' . $file->getClientOriginalExtension();
 
         if (!empty($recentwork->detailsphoto) && file_exists($path . '/' . $recentwork->detailsphoto)) {
             unlink($path . '/' . $recentwork->detailsphoto);
         }
         $file->move($path, $detailsphoto);
         $recentwork->detailsphoto = $detailsphoto;
     }
 
     // Update detailsphoto1
     if ($request->hasFile('new_detailsphoto1')) {
         $file = $request->file('new_detailsphoto1');
         $detailsphoto1 = time() . '_detailsphoto1.' . $file->getClientOriginalExtension();
 
         if (!empty($recentwork->detailsphoto1) && file_exists($path . '/' . $recentwork->detailsphoto1)) {
             unlink($path . '/' . $recentwork->detailsphoto1);
         }
         $file->move($path, $detailsphoto1);
         $recentwork->detailsphoto1 = $detailsphoto1;
     }
 
     // Update detailsphoto2
     if ($request->hasFile('new_detailsphoto2')) {
         $file = $request->file('new_detailsphoto2');
         $detailsphoto2 = time() . '_detailsphoto2.' . $file->getClientOriginalExtension();
 
         if (!empty($recentwork->detailsphoto2) && file_exists($path . '/' . $recentwork->detailsphoto2)) {
             unlink($path . '/' . $recentwork->detailsphoto2);
         }
         $file->move($path, $detailsphoto2);
         $recentwork->detailsphoto2 = $detailsphoto2;
     }
 
     // Update detailsphoto3
     if ($request->hasFile('new_detailsphoto3')) {
         $file = $request->file('new_detailsphoto3');
         $detailsphoto3 = time() . '_detailsphoto3.' . $file->getClientOriginalExtension();
 
         if (!empty($recentwork->detailsphoto3) && file_exists($path . '/' . $recentwork->detailsphoto3)) {
             unlink($path . '/' . $recentwork->detailsphoto3);
         }
         $file->move($path, $detailsphoto3);
         $recentwork->detailsphoto3 = $detailsphoto3;
     }
 
     // Update other fields
     $recentwork->projecttitle = $request->projecttitle;
     $recentwork->projectdescription = $request->projectdescription;
     $recentwork->detailstitle = $request->detailstitle;
     $recentwork->detailsdescription = $request->detailsdescription;
     $recentwork->clientname = $request->clientname;
     $recentwork->category = $request->category;
     $recentwork->date = $request->date;
     $recentwork->livepreview = $request->livepreview;
 
     // Save changes
     $recentwork->save();
 
     return back()->with('success', 'Data updated successfully!');
 }
 
   public function recentprojectdelete($id){
    $delete =Recentworks::find($id);
    $delete->delete();
    return back()->with('success','Data Delete successfully!');
   } 
}
