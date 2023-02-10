<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use App\Http\Requests\PizzaStoreRequest;
use App\Http\Requests\PizzaUpdateRequest;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizzas = Pizza::paginate(6); // Get all the pizzas available using paginate (more than 6 will be created another page)
        return view('pizza.index', compact('pizzas')); // Use the variable pizzas in the view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pizza.create'); // Function to return the create piza view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PizzaStoreRequest $request)
    {
        //dd($request->all()); // => Using Dump and Die debugging tool you can check the response data
        $path = $request->image->store('public/pizza');
        // This is how
        Pizza::create([
            'name' => $request->name,
            'description' => $request->description,
            'small_pizza_price'=>$request->small_pizza_price,
            'medium_pizza_price'=>$request->medium_pizza_price,
            'large_pizza_price'=>$request->large_pizza_price,
            'category'=>$request->category,
            'image'=>$path,
        ]);
        return redirect()->route('pizza.index')->with('message', 'Pizza added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Use the Pizza class and the find method to find the pizza and after edit the returned pizza - redirect to the view edit
        $pizza = Pizza::find($id);
        return view('pizza.edit', compact('pizza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PizzaUpdateRequest $request, $id) // change normal Request to a new class (personalized validations)
    {
        $pizza = Pizza::find($id);
        // Check if user wants to update image or not
        if($request->has('image')){
            $path = $request->image->store('public/pizza'); // create a new path to the image
        }
        else{
            $path = $pizza->image; // maintain the same path to the image
        }
        $pizza->name = $request->name;
        $pizza->description = $request->description;
        $pizza->small_pizza_price = $request->small_pizza_price;
        $pizza->medium_pizza_price = $request->medium_pizza_price;
        $pizza->large_pizza_price = $request->large_pizza_price;
        $pizza->category = $request->category;
        $pizza->image = $path;
        $pizza->save(); // function to save all data input
        return redirect()->route('pizza.index')->with('message', 'Pizza updated successfully!'); // function to redirect the pizza index and return a message
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Same concept as edit but in this case you are deleting the pizza
        Pizza::find($id)->delete();
        return redirect()->route('pizza.index')->with('message', 'Pizza deleted successfully!');
    }
}
