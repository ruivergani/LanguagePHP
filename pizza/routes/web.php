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
/*
    This file is where you put all the routes that are for the web file.
    The following routes accept GET / POST / DELETE method
*/
// Home Dashboard Route (HomeController)
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Front Page Route
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('frontpage');
// Order(Table) Form Route = using {id} to pass in the URL the ID of each pizza
Route::get('/pizza/{id}', [App\Http\Controllers\FrontendController::class, 'show'])->name('pizza.show');
// Order Store Form Route
Route::post('/order/store', [App\Http\Controllers\FrontendController::class, 'store'])->name('order.store');

// Put the Route in a group to be accessible by only Admin
Route::group(['prefix'=>'admin','middleware' => ['auth','admin']], function(){
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
    // Display all customers
    Route::get('/customers', [App\Http\Controllers\UserOrderController::class, 'customers'])->name('customers');
});

