<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteDirectionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/tuyenduong', RouteDirectionController::class);

Route::get('/map/{id}', [RouteDirectionController::class, 'showMap'])->name('map');

Route::get('/create-customer', [CustomerController::class, 'create'])->name('create-customer');

Route::post('/get-customer', [CustomerController::class, 'store'])->name('store-customer');

Route::get('/get-customer/{id}', [CustomerController::class, 'findById'])->name('find-customer-byId');