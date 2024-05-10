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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/chi-siamo', function () {
    return view('about');
})->name('about');

Route::get('/prodotti', function () {

    // prendo l'array dei prodotto da config
    $products = config('products');

    // trasformo l'array di array in array di oggetti
    $products_obj = [];
    foreach($products as $product){
        $products_obj[] = (object) $product;
    }

    return view('products', compact('products_obj'));
})->name('products');

Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');
