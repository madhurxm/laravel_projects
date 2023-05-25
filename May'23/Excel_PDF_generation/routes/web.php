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


Route::get('/',array('as'=>'pdfview','uses'=>'ItemController@pdfview'));  
Route::get('/excel-export','ItemController@excel_export')->name('excel_export');
// Route::get('/excel-import',function(){
//     return view('import_excel');
// });

Route::post('/excel-import','ItemController@excel_import')->name('excel_import');
Route::get('/excel-import','ItemController@get_excel_import')->name('import_excel');

Route::get('/plan-excel','ItemController@get_plan_excel')->name('get_plan_excel');
Route::post('/plan-excel','ItemController@post_plan_excel')->name('post_plan_excel');


