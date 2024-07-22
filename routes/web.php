<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/shop-details', function () {
    return view('shop-details');
});
Route::get('/cart', function () {
    return view('cart');
});


Route::get('admin-login',[AdminController::class, 'index']);
Route::post('admin-login',[AdminController::class, 'index']);
