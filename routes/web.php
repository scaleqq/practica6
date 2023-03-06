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

Route::get('/map', function () {
    return view('map');
});
Route::get('/katalog', function () {
    return view('katalog');
});
Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/katalog',[App\Http\Controllers\ShowController::class, 'shows' ])->name('katalog');

Route::get('/about',[App\Http\Controllers\ShowController::class, 'slider' ])->name('about');

Route::get('/katalog/{id}',[App\Http\Controllers\ShowController::class, 'productcards' ]);

Route::get('/basket',[BasketController::class, 'baskets' ])->name('basket');

Route::get('/basket/{id}',[BasketController::class, 'products']);

Route::get('/basket/{id?}/delete',[BasketController::class, 'deletebasket']);
