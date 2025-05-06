<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Aboutme;
use App\Models\cr;
use Illuminate\Http\Request;

class Aboutmecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutme =Aboutme::all();
        return view('Backend.Aboutme.index',compact('aboutme'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Aboutme.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'about_title'       => 'required|string|max:255',
            'about_description' => 'required|string',
            'name'              => 'required|string|max:255',
            'date_of_brith'     => 'required|date',
            'address'           => 'required|string|max:255',
            'zip'               => 'required|string|max:10',
            'email'             => 'required|email|max:255',
            'phone'             => 'required|string|max:20',
            'project_text'      => 'required|string|max:255',
            'photo'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Initialize file names
        $fileName = null;
    
        // Handle 'photo' file upload
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = date('ymdhi') . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/aboutme'), $fileName);
        }
    
        Aboutme::create([
            'about_title'       => $request->about_title,
            'about_description' => $request->about_description,
            'name'              => $request->name,
            'date_of_brith'     => $request->date_of_brith,
            'address'           => $request->address,
            'zip'               => $request->zip,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'project_text'      => $request->project_text,
            'photo'             => $fileName,
        ]);
        return back()->with('success', 'Data inserted successfully!');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $aboutme =Aboutme::find($id);
        return view('Backend.Aboutme.edit',compact('aboutme'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $about = Aboutme::findOrFail($id);
    
        $filename = $about->photo; // default to existing photo
    
        if ($request->hasFile('new_photo')) {
            // Delete the old photo if it exists
            if ($about->photo && file_exists(public_path('uploads/aboutme/' . $about->photo))) {
                unlink(public_path('uploads/aboutme/' . $about->photo));
            }
    
            // Save new photo
            $file = $request->file('new_photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/aboutme'), $filename);
        }
    
        // Update all fields
        $about->update([
            'about_title'       => $request->about_title,
            'about_description' => $request->about_description,
            'name'              => $request->name,
            'date_of_brith'     => $request->date_of_brith,
            'address'           => $request->address,
            'zip'               => $request->zip,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'project_text'      => $request->project_text,
            'photo'             => $filename,
        ]);
    
        return back()->with('success', 'Data updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete =Aboutme::find($id);
        $delete->delete();
        return back()->with('success','About me  deleted successfully!');
    }
}
