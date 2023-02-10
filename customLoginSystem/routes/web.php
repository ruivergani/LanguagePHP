<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController; // Import Custom Authentication Controller

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// All routes for the application
// Default (Home) Route
Route::get('/', [CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');
// Login Route
Route::get('/login', [CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
// Registration route
Route::get('/registration', [CustomAuthController::class,'registration'])->middleware('alreadyLoggedIn');
// User registration route
Route::post('/register-user', [CustomAuthController::class,'registerUser'])->name('register-user');
// Login User route
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');;
// Dashboard Logged route
Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->middleware('isLoggedIn');
// Logout route
Route::get('/logout', [CustomAuthController::class, 'logout']);
