<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class ProfileController extends Controller
{
    //
    public function profile(){

        return view('profile')->with([
            'user' => Auth::user()
        ]);

    }

    public function updateProfile(Request $request)
    {
     
        $user = auth()->user();
        $input = $request->except('password', 'confirm_password');
        
        //password update
        if(! $request->filled('password')){
           $user->fill($input)->save();
        //    return back()->with('success', 'profile saved succe !');
        }
        //encrypting the password
        $user->password = bcrypt($request->password);
        $user->fill($input)->save();

        toastr()->success('Profile was updated successfully');
        return back()->with([
            'success'=> 'profile (and password) saved !'
        ]);
    }
}
