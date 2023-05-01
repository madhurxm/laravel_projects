<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;
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
Route::get('/',[RegistrationController::class, 'index']);
Route::get('/register',[RegistrationController::class, 'index'])->name('customer.create');
Route::post('/register',[RegistrationController::class,'register']);

Route::get('/customer',[RegistrationController::class, 'index']);
Route::post('/customer',[RegistrationController::class,'store']);

Route::get('/customer/view',[RegistrationController::class,'view']);