<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pizza;
use Illuminate\Http\Request;

// Controller to manage the Front Page (Home Controller)
class FrontendController extends Controller
{
    public function index(Request $request){
        //dd($request->category);
        // Filter the pizzas by the category
        if(!$request->category){
            $pizzas = Pizza::latest()->get(); // Get the latest pizzas created in the database (order)
            return view('frontpage', compact('pizzas')); // redirect to the front page
        }
        $pizzas = Pizza::where('category', $request->category)->get(); // Get the category of all pizzas
        return view('frontpage', compact('pizzas'));

    }
    // Function to display all pizzas
    public function show($id){
        $pizza = Pizza::find($id);
        return view('show', compact('pizza'));
    }
    public function store(Request $request){
        // Validate if at least one pizza has been entered
        if($request->small_pizza == 0 && $request->medium_pizza == 0 && $request->large_pizza == 0){
            return back()->with('errormessage', 'Please order at least one pizza.');
        }
        // Validate the pizza quantity to be positive in the form
        if($request->small_pizza < 0 || $request->medium_pizza < 0 || $request->large_pizza < 0){
            return back()->with('errormessage', 'Pizza quantity must be positive.');
        }
        // Create the Order Table with the data input by the user
        Order::create([
            'time' => $request->time,
            'date' => $request->date,
            'user_id' => auth()->user()->id, // get authenticated user ID
            'pizza_id' => $request->pizza_id,
            'small_pizza' => $request->small_pizza,
            'medium_pizza' => $request->medium_pizza,
            'large_pizza' => $request->large_pizza,
            'productRadios'=>$request->productRadios,
            'body' => $request->body,
            'phone' => $request->phone
        ]);
        return back()->with('message', 'Your order is successful. ');
    }
}
