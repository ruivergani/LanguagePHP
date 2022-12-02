<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
class CustomAuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function registration(){
        return view("auth.registration");
    }
    public function registerUser(Request $request){
        // Validation for email
        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        $request->validate([
            'username'=>'required|min:1|max:20',
            'password'=>'required|min:5|max:20',
            'email'=>'required|email|unique:users',
            'url' => 'required|regex:'.$regex,
            'dob'=>'required'
        ]);
        // Save the data into the database
        $user = new User();
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->url = $request->url;
        $user->dob = $request->dob;
        $res = $user->save(); // this saves the data
        if($res){
            return back()->with('success', 'You have registered successfully');
        }
        else{
            return back()->with('fail', 'There was an error');
        }
    }
}
