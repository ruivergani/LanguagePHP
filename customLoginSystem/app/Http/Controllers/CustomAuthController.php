<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

// User Name: dhuha
// Password: dhuhaboss
class CustomAuthController extends Controller
{
    // Send to authentication login
    public function login(){
        return view("auth.login");
    }
    // Send to view registration
    public function registration(){
        return view("auth.registration");
    }
    public function registerUser(Request $request){
        // Validation for the Form in the Server Side
        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/'; // regex character function to retrive and validate URL
        $request->validate([
            'username'=>'required|min:1|max:20|unique:users', // unique to users will not allow the same user to be added to the database
            'password'=>'required|min:5|max:20', // min and max set limit to character
            'email'=>'required|email|unique:users', // unique will not allow the same email to be registered in the database
            'url' => 'regex:'.$regex, // validate the URL using regex function
            'dob'=>'required|date|before:-18 years' // Validate the date of birth using before argument to make sure candidate is older than 18 years
        ]);
        // Save the data into the User database
        $user = new User();
        $user->username = $request->username;
        $user->password = Hash::make($request->password); // Hash make password encrypted using simple hash function
        $user->email = $request->email;
        $user->url = $request->url;
        $user->dob = $request->dob;
        $res = $user->save(); // This function saves the data
        // Return messages if was registered successfully or not
        if($res){
            return redirect('login')->with('success', 'You have registered successfully');
        }
        else{
            return back()->with('fail', 'There was an error');
        }
    }
    public function loginUser(Request $request){
        // Validation for the Form Login
        $request->validate([
            'username'=>'required|min:1|max:20',
            'password'=>'required|min:5|max:20'
        ]);
        // Check username collumn request is the same as the user input (first retrieve the data)
        $user = User::where('username', '=', $request->username)->first();
        // If user exists you login
        if($user){
            if(Hash::check($request->password, $user->password)){ // Check if the password is valid (match) or not (using the Hash function)
                // If login was successful store the ID of user logged in a session
                $request->session()->put('loginId', $user->id); // get id of logged in user and redirect to the dashboard
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
    // Function for the home dashboard
    public function dashboard(){
        $data = array();
        // Validate if exists any session in the dashboard or not to avoid the user typing the URL and access our secured dashboard page
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }
    public function logout(){
        // Check if user is logged in or not
        // When the user log out you have to kill the session that was existing previously
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
