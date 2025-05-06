<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\cr;
use App\Models\Skill;
use Illuminate\Http\Request;

class Skillcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skill =Skill::all();
        return view('Backend.skill.index',compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        Skill::create([
            'skills_title' => $request->skills_title,
            'skills_description' => $request->skills_description,
            'skills_name' => $request->skills_name,
            'skills_count' => $request->skills_count,
        ]);

        return back()->with('success', 'Skill inserted successfully!');
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
        $skill =Skill::find($id);
        return view('Backend.skill.edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $skill =Skill::find($id);
        $skill->update([
            'skills_title' => $request->skills_title,
            'skills_description' => $request->skills_description,
            'skills_name' => $request->skills_name,
            'skills_count' => $request->skills_count,
        ]);
        return back()->with('success', 'Skill update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete=Skill::find($id);
        $delete->delete();
        return back()->with('success', 'Skill delete successfully!');
    }
}
