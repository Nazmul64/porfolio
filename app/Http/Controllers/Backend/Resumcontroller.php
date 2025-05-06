<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\cr;
use App\Models\Resum;
use Illuminate\Http\Request;

class Resumcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resum =Resum::all();
      return view('Backend.Resum.index',compact('resum'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Resum.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'resum_title' => 'required',
            'resum_description' => 'required',
        ]);

        Resum::create([
            'resum_title' => $request->resum_title,
            'resum_description' => $request->resum_description,
            'date_of_brith' => $request->date_of_brith,
        ]);

        return back()->with('success', 'Resum inserted successfully!');
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
        $resum =Resum::find($id);
        return view('Backend.Resum.edit',compact('resum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $resum =Resum::find($id);
        $resum->update([
            'resum_title' => $request->resum_title,
            'resum_description' => $request->resum_description,
            'date_of_brith' => $request->date_of_brith,
        ]);
        return back()->with('success', 'Resum upate successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete=Resum::find($id);
        $delete->delete();
       return back()->with('success','Resum delete Successfully');
    }
}
