<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurrfectProductsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', function () {

    return view('about');
});
Route::get('/contact', function () {

    return view('about');
});

Route::get('/team', function () {

    return view('about');
});
Route::get('/payment', function () {

    return view('payment');
});

/*****CART*****/
Route::get('/cart', function () {

    return view('cart');
});



Route::get('/', [PurrfectProductsController::class, 'index']);

Route::get('cart', [PurrfectProductsController::class, 'cart'])->name('cart');

Route::get('add-to-cart/{id}',[PurrfectProductsController::class, 'addToCart'])->name('add_to_cart');

Route::patch('update-cart',[PurrfectProductsController::class, 'update'])->name('update_cart');

Route::delete('remove-from-cart',[PurrfectProductsController::class,'remove'])->name('remove_from_cart');

/**********/





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


