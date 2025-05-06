<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\cr;
use App\Models\Seometa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class SeometaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $metakeyword =Seometa::all();
        return view('Backend.Seometa.index',compact('metakeyword'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Seometa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation for SEO fields
        $request->validate([
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:160',
            'meta_keywords' => 'required|array',  // Expecting an array of keywords
            'meta_focus_keywords' => 'required|array',  // Expecting an array of focus keywords
        ]);
    
        // Convert the arrays of keywords into comma-separated strings
        $metaKeywords = implode(',', array_map('trim', $request->meta_keywords));
        $metaFocusKeywords = implode(',', array_map('trim', $request->meta_focus_keywords));
    
        // Generate a slug from the meta_title
        $slug = Str::slug($request->meta_title, '-');
    
        // Create the new Metakeyword record in the database
        Seometa::create([
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $metaKeywords,  // Store as comma-separated string
            'meta_focus_keywords' => $metaFocusKeywords,  // Store as comma-separated string
            'slug' => $slug,
        ]);
    
        // Return success message
        return back()->with('success', 'SEO Metadata Added Successfully!');
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
        $metakeyword =Seometa::find($id);
        return view('Backend.Seometa.edit',compact('metakeyword'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $meakeyword = Seometa::find($id);
        // Convert the arrays of keywords into comma-separated strings
        $metaKeywords = implode(',', array_map('trim', $request->meta_keywords));
        $metaFocusKeywords = implode(',', array_map('trim', $request->meta_focus_keywords));
    
        // Generate a slug from the meta_title
        $slug = Str::slug($request->meta_title, '-');
    
        $meakeyword->update([
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $metaKeywords,  // Store as comma-separated string
            'meta_focus_keywords' => $metaFocusKeywords,  // Store as comma-separated string
            'slug' => $slug,
        ]);
        return back()->with('success', 'SEO Metadata update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete =Seometa::find($id);
        $delete->delete();
        return back()->with('success', 'SEO Metadata delete Successfully!');
    }
}
