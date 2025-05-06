<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Askqusition;
use Illuminate\Http\Request;

class AskqusitionController extends Controller
{
    public function askquestionstore(Request $request){
       $request->validate([
          'name'=>'required',
          'email'=>'required',
          'subject'=>'required',
          'message'=>'required',
       ]);
      Askqusition::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'subject'=>$request->subject,
        'message'=>$request->message,
      ]);
      return back()->with('success','Ask Your Question submit');
    }
    public function askquestionindex(){
        $askquisition=Askqusition::all();
        return view('Backend.faq.faqask',compact('askquisition'));
    }
public function askquestiondelete($id){
    $delete =Askqusition::find($id);
    $delete->delete();
    return back()->with('success','Ask Your Question deleted successfully!');

}
}
