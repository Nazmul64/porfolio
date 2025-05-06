<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Whyspecil;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use PhpParser\Node\Expr\FuncCall;

class WhyspecilaController extends Controller
{
    public function whyspecilcreate(){
        return view('Backend.whyspecil.create');
    }
    public function whyspecilstore(Request $request)
    {
        $request->validate([
            'title'                   => 'nullable|string|max:255',
            'description'             => 'nullable|string',
            'photo'                   => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', 
            'communication_title'     => 'nullable|string',
            'communication_description' => 'nullable|string',
            'experience_title'        => 'nullable|string',
            'experience_description'  => 'nullable|string',
            'safeSecure_title'        => 'nullable|string', 
            'safeSecure_description'  => 'nullable|string', 
            'passionfortesting_title' => 'nullable|string', 
            'passionfortesting_description' => 'nullable|string', 
        ]);
    
        $filename = null;
    
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/whyspicel');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file->move($path, $filename);
        }
    
        Whyspecil::create([
            'title'                   => $request->input('title'),
            'description'             => $request->input('description'),
            'photo'                   => $filename, 
            'communication_title'     => $request->input('communication_title'),
            'communication_description' => $request->input('communication_description'),
            'experience_title'        => $request->input('experience_title'),
            'experience_description'  => $request->input('experience_description'),
            'safeSecure_title'        => $request->input('safeSecure_title'), 
            'safeSecure_description'  => $request->input('safeSecure_description'), 
            'passionfortesting_title' => $request->input('passionfortesting_title'), 
            'passionfortesting_description' => $request->input('passionfortesting_description'),
            'photo'=>$filename
        ]);
    
        return back()->with('success', 'Data created successfully');
    }
    public function whyspecilidnex(){
        $item_show=Whyspecil::all();
        return view('Backend.whyspecil.index',compact('item_show'));
    }
    public function whyspeciledit($id){
        $item_edit=Whyspecil::find($id);
        return view('Backend.whyspecil.edit',compact('item_edit'));
    }
    public function whyspecilupdate(Request $request,$id){
        $request->validate([
            'title'                   => 'nullable|string|max:255',
            'description'             => 'nullable|string',
            'photo'                   => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', 
            'communication_title'     => 'nullable|string',
            'communication_description' => 'nullable|string',
            'experience_title'        => 'nullable|string',
            'experience_description'  => 'nullable|string',
            'safeSecure_title'        => 'nullable|string', 
            'safeSecure_description'  => 'nullable|string', 
            'passionfortesting_title' => 'nullable|string', 
            'passionfortesting_description' => 'nullable|string', 
        ]);
     
    $whyspicel = Whyspecil::findOrFail($id);
    if ($request->hasFile('new_photo')) {
        $file = $request->file('new_photo');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = public_path('uploads/whyspicel');
        if (!empty($hosting->photo) && file_exists($path . '/' . $whyspicel->photo)) {
            unlink($path . '/' . $whyspicel->photo);
        }
        $file->move($path, $filename);
        $whyspicel->photo = $filename;
    }
    $whyspicel->update([
        'title'                   => $request->input('title'),
            'description'             => $request->input('description'),
            'photo'                   => $filename, 
            'communication_title'     => $request->input('communication_title'),
            'communication_description' => $request->input('communication_description'),
            'experience_title'        => $request->input('experience_title'),
            'experience_description'  => $request->input('experience_description'),
            'safeSecure_title'        => $request->input('safeSecure_title'), 
            'safeSecure_description'  => $request->input('safeSecure_description'), 
            'passionfortesting_title' => $request->input('passionfortesting_title'), 
            'passionfortesting_description' => $request->input('passionfortesting_description'),
            'photo'=>$filename
    ]);
    return back()->with('success', 'Data Edit successfully');
    }
    public function whyspecildelete($id){
        $delete=Whyspecil::find($id);
        $delete->delete();
        return back()->with('success', 'Data deleted successfully');
    }
}
