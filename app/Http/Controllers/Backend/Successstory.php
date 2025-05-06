<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Success;
use Illuminate\Http\Request;

class Successstory extends Controller
{
    public function Successstorycreate(){
        return view('Backend.successstory.create');
    }
    public function Successstorystore(Request $request)
    {
        // Validate input
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'count1' => 'required', // Ensure it's a number
            'counttitle1' => 'required',
            'count2' => 'required',
            'counttitle2' => 'required',
            'count3' => 'required',
            'counttitle3' => 'required',
            'count4' => 'required',
            'counttitle4' => 'required',
        ]);
    
        // Create a new success story
        Success::create([
            'title' => $request->title,
            'description' => $request->description,
            'count1' => $request->count1, // Access the request values directly
            'counttitle1' => $request->counttitle1,
            'count2' => $request->count2,
            'counttitle2' => $request->counttitle2,
            'count3' => $request->count3,
            'counttitle3' => $request->counttitle3,
            'count4' => $request->count4,
            'counttitle4' => $request->counttitle4,
        ]);
    
        // Redirect to a specific route or view with a success message
        return back()->with('success', 'Data uploaded successfully!');
    }
    public function Successstoryindex(){
        $datashow=Success::all();
        return view('Backend.successstory.index',compact('datashow'));
    }
    public function Successstoryedit($id){
        $edit =Success::find($id);
        return view('Backend.successstory.edit',compact('edit'));
    }
    public function Successstoryupdate(Request $request,$id){
       $update=Success::find($id);
       $update->update([
        'title' => $request->title,
        'description' => $request->description,
        'count1' => $request->count1,
        'counttitle1' => $request->counttitle1,
        'count2' => $request->count2,
        'counttitle2' => $request->counttitle2,
        'count3' => $request->count3,
        'counttitle3' => $request->counttitle3,
        'count4' => $request->count4,
        'counttitle4' => $request->counttitle4,
       ]);
       return back()->with('success', 'Data update successfully!');
    }
    public function Successstorydelete($id){
       $delete =Success::find($id);
       $delete->delete();
       return back()->with('success', 'Data Delete successfully!');
    }
}
