<?php

use App\Models\Hotels;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function () {
    $Hotels = Hotels::all();

    return view('home', compact('Hotels'));
})->name('home')->middleware('auth');

Route::resource('hotels', \App\Http\Controllers\HotelController::class)
    ->middleware('auth');

Route::get('/hotel', [App\Http\Controllers\HomeController::class, 'index'])->name('hotel');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('hotel');

Route::get('/detail/{id}', function ($id) {

    $hotel = Hotels::findOrFail($id);

    return view('detail', compact('hotel'));
});
