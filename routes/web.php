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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    $user = \Illuminate\Support\Facades\Auth::user();
    return view('dashboard.dashboard',compact('user'));
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('dashboard')->group(function () {
    Route::resource('currencies','App\Http\Controllers\CurrencyController')->middleware('auth');
    Route::resource('taxes','App\Http\Controllers\TaxesController')->middleware('auth');
    Route::resource('warehouses','App\Http\Controllers\WarehousesController')->middleware('auth');
    Route::resource('items_category','App\Http\Controllers\ItemCategoryController')->middleware('auth');
});


