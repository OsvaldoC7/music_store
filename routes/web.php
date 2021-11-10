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
    return view('plantilla.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('articulos', 'App\Http\Controllers\ArticuloController');

Route::get('/product-details', function () {
    return view('plantilla.product-details');
});
Route::get('/shop-cart', function () {
    return view('plantilla.shop-cart');
});
Route::get('/shop', function () {
    return view('plantilla.shop');
});
Route::get('/checkout', function () {
    return view('plantilla.checkout');
});