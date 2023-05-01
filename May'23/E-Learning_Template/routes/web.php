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
    return view('index');
});
Route::get('/404', function () {
    return view('pages/404');
});
Route::get('/about', function () {
    return view('pages/about');
});
Route::get('/contact', function () {
    return view('pages/contact');
});
Route::get('/courses', function () {
    return view('pages/courses');
});
Route::get('/team', function () {
    return view('pages/team');
});
Route::get('/testimonial', function () {
    return view('pages/testimonial');
});
Route::get('/register', function () {
    return view('pages/register');
});
Route::get('/login', function () {
    return view('pages/login');
});
Route::get('/add-course', function () {
    return view('pages/add_course');
});