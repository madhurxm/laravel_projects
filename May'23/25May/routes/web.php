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

Route::get('/', 'FilterController@view_records')->name('get_records');
Route::post('/', 'FilterController@get_select_value')->name('post_records');
Route::get('/reset', 'FilterController@reset')->name('post_records');
Route::get('/pdf', 'FilterController@pdf')->name('pdf');


