<?php

namespace Tests\Unit;

use App\Models\Pizza;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Faker\Generator as Faker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Str;
use Tests\TestCase; // refactor code
use Hash;

class PizzaTest extends TestCase
{
    use RefreshDatabase;
    use WithoutMiddleware;
    public function test_create(){
        // 1. Define the goal
        // 2. Replicate the env / restriction
        // 3. Define the source of truth
        // 4. Compare the result
    }
    public function test_update(){

    }
    public function test_delete(){

    }



}
