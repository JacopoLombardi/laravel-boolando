<?php

use Illuminate\Support\Facades\Route;

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


// HOME page
Route::get('/', function () {

    $products_array = config('products');

    return view('home', compact('products_array'));
})->name('homepage');




//////////////////////////////////


// account
Route::get('/account', function () {

    return view('account');
})->name('accountpage');



// preferiti
Route::get('/favourites', function () {

    return view('favourites');
})->name('favouritespage');



// carrello
Route::get('/cart', function () {

    return view('cart');
})->name('cartpage');
