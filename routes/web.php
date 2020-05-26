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

Route::get('/', 'LandingController@index');
Route::get('bahan-masakan', 'LandingController@produk');
Route::get('resep', 'LandingController@resep');

Route::get('resep/{slug}', 'LandingController@resepDetail');
Route::get('bahan-masakan/{slug}', 'LandingController@produkDetail');

//Belum Work
Route::get('cart', 'LandingController@cart');
Route::get('checkout', 'LandingController@checkout');
Route::get('contact', 'LandingController@contact');
Route::get('about', 'LandingController@about');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();