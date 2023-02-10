<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PizzaStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */

     // This file is responsible for the validation in the table or data input (server side view)
     // All the fields below must have the same name as the .HTML form fields and must be the same as the database
    public function rules()
    {
        return [
            'name'=>'required|string|min:3|max:30',
            'description'=>'required|min:3|max:500',
            'small_pizza_price'=>'required|numeric',
            'medium_pizza_price'=>'required|numeric',
            'large_pizza_price'=>'required|numeric',
            'category'=>'required',
            'image'=>'required|mimes:png,jpeg,jpg' //validate image extension
        ];
    }
}
