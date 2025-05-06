<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function Profilecreate(){
        return view('Backend.profile.create');
    }
    public function Profilechanes(Request $request)
    {

        User::find(Auth::id())->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return back()->with('success', 'Admin Name successfully changed.');
    }
public function passwordechanes(Request $request){
  if(Hash::check($request->old_password,Auth::user()->password)){
     if($request->password==$request->password_confirm){
       User::find(Auth::id())->update([
          'password'=>bcrypt($request->password),
       ]);
       return back()->with('success',' Password update successfully!;');
     }else{
        return back()->with('error','Old Password Does Not Match Width Confirmaton Password  Our Records');
     }
  }else{
    return back()->with('error','Old Password Does Not Match Width Our Records');
  }

}

}
