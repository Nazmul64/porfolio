<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Ourtechnology;
use Illuminate\Http\Request;
use OuterIterator;

class OurtechnologyController extends Controller
{
    public function techonology(){
        return view('Backend.technology.create');
    }

    public function techonologystore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'maintitle' => 'nullable|string|max:255',
            'maindescription' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
       
            // Initialize filename variable
            $fileName = null;
    
            // Handle file upload
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $fileName = date('YmdHi') . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/technology'), $fileName);
            }
            if ($request->hasFile('photo_2')) {
                $file = $request->file('photo_2');
                $photo_2 = date('YmdHi') . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/technology'), $photo_2);
            }
            if ($request->hasFile('photo_3')) {
                $file = $request->file('photo_3');
                $photo_3 = date('YmdHi') . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/technology'), $photo_3);
            }
            if ($request->hasFile('photo_4')) {
                $file = $request->file('photo_4');
                $photo_4 = date('YmdHi') . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/technology'), $photo_4);
            }
            if ($request->hasFile('photo_5')) {
                $file = $request->file('photo_5');
                $photo_5 = date('YmdHi') . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/technology'), $photo_5);
            }
            if ($request->hasFile('photo_6')) {
                $file = $request->file('photo_6');
                $photo_6 = date('YmdHi') . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/technology'), $photo_6);
            }
            // Insert data into the database
            Ourtechnology::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'maintitle' => $request->input('maintitle'),
                'maindescription' => $request->input('maindescription'),
                'maintitle2' => $request->input('maintitle2'),
                'maindescription2' => $request->input('maindescription2'),
                'maintitle3' => $request->input('maintitle3'),
                'maindescription3' => $request->input('maindescription3'),
                'maintitle4' => $request->input('maintitle4'),
                'maindescription4' => $request->input('maindescription4'),
                'maintitle5' => $request->input('maintitle5'),
                'maindescription5' => $request->input('maindescription5'),
                'maintitle6' => $request->input('maintitle6'),
                'maindescription6' => $request->input('maindescription6'),
                'photo' => $fileName,
                'photo_2' => $photo_2,
                'photo_3' => $photo_3,
                'photo_4' => $photo_4,
                'photo_5' => $photo_5,
                'photo_6' => $photo_6,
            ]);
            return back()->with('success', 'Data inserted successfully!');
        }
        public function techonologyindex(){
            $data =Ourtechnology::all();
            return view('Backend.technology.index',compact('data'));
        }
        public function techonologyedit($id){
            $edit=Ourtechnology::find($id);
            return view('Backend.technology.edit',compact('edit'));
        }
        public function techonologyupdate(Request $request, $id)
        {
            try {
                // Fetch the record from the database
                $technology = Ourtechnology::findOrFail($id);
        
                // Initialize file variables
                $fileName = $technology->photo;
                $new_photo_2 = $technology->photo_2;
                $new_photo_3 = $technology->photo_3;
                $new_photo_4 = $technology->photo_4;
                $new_photo_5 = $technology->photo_5;
                $new_photo_6 = $technology->photo_6;
        
                // Function to handle file upload and deletion
                $handleFileUpload = function ($file, $existingFilePath) {
                    if ($existingFilePath && file_exists($existingFilePath)) {
                        unlink($existingFilePath); // Delete old file
                    }
                    $newFileName = date('YmdHi') . '_' . $file->getClientOriginalName();
                    $file->move(public_path('uploads/technology'), $newFileName); // Save new file
                    return $newFileName;
                };
        
                // Check and handle each file upload
                if ($request->hasFile('new_photo')) {
                    $fileName = $handleFileUpload($request->file('new_photo'), public_path('uploads/technology/' . $technology->photo));
                }
                if ($request->hasFile('new_photo_2')) {
                    $new_photo_2 = $handleFileUpload($request->file('new_photo_2'), public_path('uploads/technology/' . $technology->photo_2));
                }
                if ($request->hasFile('new_photo_3')) {
                    $new_photo_3 = $handleFileUpload($request->file('new_photo_3'), public_path('uploads/technology/' . $technology->photo_3));
                }
                if ($request->hasFile('new_photo_4')) {
                    $new_photo_4 = $handleFileUpload($request->file('new_photo_4'), public_path('uploads/technology/' . $technology->photo_4));
                }
                if ($request->hasFile('new_photo_5')) {
                    $new_photo_5 = $handleFileUpload($request->file('new_photo_5'), public_path('uploads/technology/' . $technology->photo_5));
                }
                if ($request->hasFile('new_photo_6')) {
                    $new_photo_6 = $handleFileUpload($request->file('new_photo_6'), public_path('uploads/technology/' . $technology->photo_6));
                }
        
                // Update the database record
                $technology->update([
                    'title' => $request->input('title'),
                    'description' => $request->input('description'),
                    'maintitle' => $request->input('maintitle'),
                    'maindescription' => $request->input('maindescription'),
                    'maintitle2' => $request->input('maintitle2'),
                    'maindescription2' => $request->input('maindescription2'),
                    'maintitle3' => $request->input('maintitle3'),
                    'maindescription3' => $request->input('maindescription3'),
                    'maintitle4' => $request->input('maintitle4'),
                    'maindescription4' => $request->input('maindescription4'),
                    'maintitle5' => $request->input('maintitle5'),
                    'maindescription5' => $request->input('maindescription5'),
                    'maintitle6' => $request->input('maintitle6'),
                    'maindescription6' => $request->input('maindescription6'),
                    'photo' => $fileName,
                    'photo_2' => $new_photo_2,
                    'photo_3' => $new_photo_3,
                    'photo_4' => $new_photo_4,
                    'photo_5' => $new_photo_5,
                    'photo_6' => $new_photo_6,
                ]);
        
                // Return success response
                return back()->with('success', 'Data updated successfully!');
            } catch (\Exception $e) {
                // Handle errors and return a friendly message
                return back()->with('error', 'An error occurred: ' . $e->getMessage());
            }
        }
        
        public function techonologydelete($id){
            $delte =Ourtechnology::find($id);
            $delte->delete();
            return back()->with('success','Data Delete successfully!');
        }
        
    }
    

