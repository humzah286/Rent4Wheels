<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\carviewController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\signupController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\checkoutController;

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

Route::get('/home', [homecontroller::class, 'index']);

// Route::get('/home#categories', [homecontroller::class, 'categories']);

Route::get('/login', function(){
    return view('login');
});

Route::get('/contact', [contactController::class, 'index']);

Route::post('/contact', [contactController::class, 'contact1']);

Route::get('/signup', function(){
    return view('signup');
});

Route::post('/signup', [signupController::class, 'signup']);

Route::get('', [homecontroller::class, 'index']);

Route::get('/categories/{name}', [categoryController::class, 'index']);

Route::post('/login', [signupController::class, 'verify']);

Route::get('/logout', function(){
    session()->flush();
    return redirect('/home');
});

Route::get('viewcar/{id}', [carviewController::class, 'index']);
 
Route::get('/checkout/{id}', [checkoutController::class, 'index']);

Route::post('/checkout', [checkoutController::class, 'checkout']);

Route::get('/category/popular', [categoryController::class, 'popular']);