<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clientcreate(){
        return view('Backend.client.create');
    }
    public function clientstore(Request $request)
    {
        $request->validate([
            'photo_1' => 'required|file|mimes:jpg,jpeg,png|max:2048', // Limit to 2MB
            'photo_2' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        $photo_1 = null;
        $photo_2 = null;
    
        // Handle photo_1 upload
        if ($request->hasFile('photo_1')) {
            $file = $request->file('photo_1');
            $photo_1 = date('YmdHis') . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/client'), $photo_1);
        }
    
        // Handle photo_2 upload
        if ($request->hasFile('photo_2')) {
            $file = $request->file('photo_2');
            $photo_2 = date('YmdHis') . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/client'), $photo_2);
        }
    
        // Insert into database
        Client::create([
            'photo_1' => $photo_1,
            'photo_2' => $photo_2,
        ]);
    
        return back()->with('success', 'Data uploaded successfully');
    }
    public function clientindex(){
        $datashow=Client::all();
        return view('Backend.client.index',compact('datashow'));
    }
    public function clientedit($id){
       $edite =Client::find($id);
       return view('Backend.client.edite',compact('edite'));
    }
    public function clientupdate(Request $request, $id)
    {
        $client = Client::findOrFail($id);
    
        $path = public_path('uploads/client');
    
        // Update photo_1
        if ($request->hasFile('new_photo_1')) {
            $file = $request->file('new_photo_1');
            $photo_1 = time() . '_photo1.' . $file->getClientOriginalExtension();
    
            if (!empty($client->photo_1) && file_exists($path . '/' . $client->photo_1)) {
                unlink($path . '/' . $client->photo_1);
            }
    
            $file->move($path, $photo_1);
            $client->photo_1 = $photo_1;
        }
    
        // Update photo_2
        if ($request->hasFile('new_photo_2')) {
            $file = $request->file('new_photo_2');
            $photo_2 = time() . '_photo2.' . $file->getClientOriginalExtension();
    
            if (!empty($client->photo_2) && file_exists($path . '/' . $client->photo_2)) {
                unlink($path . '/' . $client->photo_2);
            }
    
            $file->move($path, $photo_2);
            $client->photo_2 = $photo_2;
        }
    
        // Save updated client details
        $client->save();
    
        return redirect()->back()->with('success', 'Client updated successfully.');
    }
    public function delete($id){
        $client = Client::find($id);
        if ($client) {
            $client->delete();
            return redirect()->back()->with('success', 'Client deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Client not found.');
        }
    }
    
    
} 
