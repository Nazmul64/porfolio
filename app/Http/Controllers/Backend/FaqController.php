<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Gallery;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function faqcreate(){
        return view('Backend.faq.create');
    }
    public function faqstore(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Faq::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return back()->with('success', 'Data inserted successfully!');
    }
    public function faqidnex(){
        $data_show=Faq::all();
        return view('Backend.faq.index',compact('data_show'));
    }
public function faqedit($id){
    $edit=Faq::find($id);
    return view('Backend.faq.edit',compact('edit'));
}
public function faqupdate(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
    ]);

    Faq::findOrFail($id)->update([
        'title' => $request->title,
        'description' => $request->description,
    ]);

    return back()->with('success', 'Data updated successfully!');
}
public function faqdelete($id){
    $delete=Faq::find($id);
    $delete->delete();
    return back()->with('success', 'Data delete successfully!');
}

}
