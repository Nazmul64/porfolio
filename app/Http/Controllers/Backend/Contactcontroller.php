<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Mockery\Matcher\Contains;

class Contactcontroller extends Controller
{
    public function contactcreate(){
        return view('Backend.Contact.create');
    }
    public function contactstore(Request $request)
{
    $request->validate([
        'email_1' => 'required',
        'email_2' => 'required',
        'address' => 'required',
        'number_1' => 'required',
        'number_2' => 'required',
        'photo' => 'required|image', // Ensure the uploaded file is an image
    ]);

    $fileName = null;

    if ($request->file('photo')) {
        $file = $request->file('photo');
        $fileName = date('mdhi') . $file->getClientOriginalName();
        $file->move(public_path('uploads/contact'), $fileName); // Correct usage
    }

    Contact::create([
        'email_1' => $request->email_1,
        'email_2' => $request->email_2,
        'address' => $request->address,
        'number_1' => $request->number_1,
        'number_2' => $request->number_2,
        'photo' => $fileName,
    ]);

    return back()->with('success', 'Data Uploaded Successfully!');
}
public function contactindex(){
    $data=Contact::all();
    return view('Backend.Contact.index',compact('data'));
}
public function contactedit($id){
    $edite=Contact::find($id);
    return view('Backend.Contact.edit',compact('edite'));
}
public function contactupdate(Request $request, $id)
{
    // Fetch the contact or fail if it doesn't exist
    $contactupdate = Contact::findOrFail($id);

    $path = public_path('uploads/contact');

    // Handle the photo update
    if ($request->hasFile('new_photo')) {
        $file = $request->file('new_photo');
        $photo = time() . '_contact.' . $file->getClientOriginalExtension();

        // Delete the old photo if it exists
        if (!empty($contactupdate->photo) && file_exists($path . '/' . $contactupdate->photo)) {
            unlink($path . '/' . $contactupdate->photo);
        }

        // Save the new photo
        $file->move($path, $photo);
        $contactupdate->photo = $photo;
    }

    // Update other fields
    $contactupdate->email_1 = $request->email_1;
    $contactupdate->email_2 = $request->email_2;
    $contactupdate->address = $request->address;
    $contactupdate->number_1 = $request->number_1;
    $contactupdate->number_2 = $request->number_2;

    // Save the updated record
    $contactupdate->save();

    return back()->with('success', 'Data updated successfully!');
}
public function contactdelete($id)
{
    $delete = Contact::find($id);
    if (!$delete) {
        return back()->with('error', 'Data not found!');
    }
    $deleted = $delete->delete();
    if ($deleted) {
        return back()->with('success', 'Data deleted successfully!');
    } else {
        return back()->with('error', 'Data deletion failed!');
    }
}

}
