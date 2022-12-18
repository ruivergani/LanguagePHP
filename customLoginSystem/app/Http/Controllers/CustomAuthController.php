<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
class CustomAuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function registration(){
        return view("auth.registration");
    }
    public function registerUser(Request $request){
        // Validation for the form
        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        $request->validate([
            'username'=>'required|min:1|max:20|unique:users',
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
            return redirect('login')->with('success', 'You have registered successfully');
        }
        else{
            return back()->with('fail', 'There was an error');
        }
    }
    public function loginUser(Request $request){
        // Validation for the form
        $request->validate([
            'username'=>'required|min:1|max:20',
            'password'=>'required|min:5|max:20'
        ]);
        $user = User::where('username', '=', $request->username)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                // If login was successful
                $request->session()->put('loginId', $user->id); // get id of logged in user
                return redirect('dashboard');
            }
            else{
                return back()->with('fail', 'Password not matches.');
            }
        }
        else{
            return back()->with('fail', 'This username is not registered.');
        }
    }
    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }
    public function logout(){
        // Check if user is logged in or not
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
