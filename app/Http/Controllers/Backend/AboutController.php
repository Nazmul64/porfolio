<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function contactcreate(){
        return view('Backend.aboutus.create');
    }
    public function contactstore(Request $request){
        $request->validate([
            'about_us'=>'required',
            'description'=>'required',
            'our_history'=>'required',
            'history_description'=>'required',
            'our_mission'=>'required',
            'mission_description'=>'required',
            'who_we_are'=>'required',
            'who_we_are_description'=>'required',
            'photo'=>'required',
        ]);

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $fileName = date('ymdhi') . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/about'), $fileName);
        }
        About::create([
            'about_us'=>$request->about_us,
            'description'=>$request->description,
            'our_history'=>$request->our_history,
            'history_description'=>$request->history_description,
            'our_mission'=>$request->our_mission,
            'mission_description'=>$request->mission_description,
            'who_we_are'=>$request->who_we_are,
            'who_we_are_description'=>$request->who_we_are_description,
            'photo'=>$fileName,
        ]);
        return back()->with('success','data insert successfully!');
    }
    public function aboutindex(){
        $show=About::all();
        return view('Backend.aboutus.index',compact('show'));
    }
    public function aboutedit($id){
        $edit_data=About::find($id);
        return view('Backend.aboutus.edit',compact('edit_data'));
    }
    public function aboutupdate(Request $request,$id){
        if ($request->hasFile('new_photo')) {
            if($request->file('new_photo')){
                  if(file_exists(public_path('uploads/about/' . About::find($id)->photo))){
                      unlink(public_path('uploads/about/' . About::find($id)->photo));
                  $file = $request->file('new_photo');
                  $filename = time() . '.' . $file->getClientOriginalExtension();
                  $path = "uploads/about";
                  $file->move($path, $filename);
                  About::find($id)->update([
                      'photo' => $filename,
                  ]);
            }
          }

          About::find($id)->update([
            'about_us'=>$request->about_us,
            'description'=>$request->description,
            'our_history'=>$request->our_history,
            'history_description'=>$request->history_description,
            'our_mission'=>$request->our_mission,
            'mission_description'=>$request->mission_description,
            'who_we_are'=>$request->who_we_are,
            'who_we_are_description'=>$request->who_we_are_description,
         ]);
         return back()->with('success','Data update Successfully');
      }

    }
    public function contactdelete($id){
       $delete=About::find($id);
       $delete->delete();
       return back()->with('success','Data delete Successfully');
    }

}
