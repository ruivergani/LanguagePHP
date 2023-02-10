<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pizza;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory; // trait that links a Eloquent model to a model factory
    protected $guarded=[]; // Use the array as an empty route (Store all information from the form)

    // Create the database relationship to retrieve data from other tables (Models) = this will be really useful when creating the Order Form
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function pizza(){
        return $this->belongsTo(Pizza::class);
    }

}
