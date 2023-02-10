<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Check if authenticated user is admin and redirect to user order
        if(auth()->user()->is_admin == 1){
            return redirect()->route('user.order');
        }
        $orders = Order::latest()->where('user_id', auth()->user()->id)->get(); // get user's orders (based on ID)
        return view('home', compact('orders'));
    }
}
