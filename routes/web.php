<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceCotroller;
use App\Http\Controllers\OrderCotroller;
use App\Http\Controllers\EmployeCotroller;

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
Route::resource('services',ServiceCotroller::class );
Route::resource('orders',OrderCotroller::class );
Route::resource('employes',EmployeCotroller::class );

