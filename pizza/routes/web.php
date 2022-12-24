<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); // Home Dashboard Route
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('frontpage'); // Front Page Route
Route::get('/pizza/{id}', [App\Http\Controllers\FrontendController::class, 'show'])->name('pizza.show'); // Order Form Route
Route::post('/order/store', [App\Http\Controllers\FrontendController::class, 'store'])->name('order.store'); // Order Store Form Route

// Accessible by Admin only
Route::group(['middleware' => 'auth','admin'], function(){
    // Pizza Routes
    Route::get('/pizza', [App\Http\Controllers\PizzaController::class, 'index'])->name('pizza.index'); // => Home List of Pizzas
    Route::get('/pizza/create', [App\Http\Controllers\PizzaController::class, 'create'])->name('pizza.create'); // => Create Form Pizza
    Route::get('/pizza/{id}/edit', [App\Http\Controllers\PizzaController::class, 'edit'])->name('pizza.edit'); // => Edit Data Route
    Route::put('/pizza/{id}/update', [App\Http\Controllers\PizzaController::class, 'update'])->name('pizza.update'); // => Update Data Route
    Route::delete('/pizza/{id}/delete', [App\Http\Controllers\PizzaController::class, 'destroy'])->name('pizza.destroy'); // => Delete Data Route
    Route::post('/pizza/store', [App\Http\Controllers\PizzaController::class, 'store'])->name('pizza.store'); // => Submit Data Route

    // Order Route
    Route::get('/user/order', [App\Http\Controllers\UserOrderController::class, 'index'])->name('user.order'); // => Order Route
    Route::post('/order/{id}/status', [App\Http\Controllers\UserOrderController::class, 'changeStatus'])->name('order.status'); // => Order Route
});

