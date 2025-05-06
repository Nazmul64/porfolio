<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testmonaill;
use App\Models\Testmonial;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class TestmonailController extends Controller
{
    public function testmonailcreate(){
        return view('Backend.testmonail.create');
    }
    public function testmonailStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'review' => 'required|string',
            'description' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $fileName = null;
    
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = date('ymdHi') . '_' . $file->getClientOriginalName(); 
            $file->move(public_path('uploads/testimonial'), $fileName); 
        }
            Testmonaill::create([ 
                'title' => $request->title,
                'review' => $request->review, 
                'description' => $request->description,
                'photo' => $fileName,
            ]);
            return back()->with('success', 'Testimonial has been uploaded successfully!');
        }
        public function testmonailindex(){
            $datashow=Testmonaill::all();
            return view('Backend.testmonail.index',compact('datashow'));

        }
        public function testmonailedit($id){
            $edit_data=Testmonaill::find($id);
            return view('Backend.testmonail.edit',compact('edit_data'));
        }
        public function testmonailupdate(Request $request, $id)
        {
            $testmonail = Testmonaill::findOrFail($id); // Find the record by ID
            $path = public_path('uploads/testimonial'); // Define upload path
        
            $request->validate([
                'title' => 'required|string|max:255',
                'review' => 'required|string',
                'description' => 'required|string',
                'new_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
        
            $filename = $testmonail->photo; // Default to existing photo
        
            if ($request->hasFile('new_photo')) {
                $file = $request->file('new_photo');
                $filename = time() . '_photo.' . $file->getClientOriginalExtension();
        
                // Remove old file if it exists
                if (!empty($testmonail->photo) && file_exists($path . '/' . $testmonail->photo)) {
                    unlink($path . '/' . $testmonail->photo);
                }
        
                $file->move($path, $filename); // Save new photo
            }
        
            // Update the record
            $testmonail->update([
                'title' => $request->title,
                'review' => $request->review,
                'description' => $request->description,
                'photo' => $filename,
            ]);
        
            return back()->with('success', 'Testimonial has been updated successfully!');
        }
        public function testmonaildelete($id){
            $delete =Testmonaill::find($id);
            $delete->delete();
            return back()->with('success','Data Delete successfully!');
           } 
        
    }
    

