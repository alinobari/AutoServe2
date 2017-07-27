<?php

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
    return view('home');
});

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/about_project', function () {
    return view('about_project');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact_us', function () {
    return view('contact_us');
});

Route::get('/serve', function () {
    return view('serve');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/test2', function () {
    return view('test2');
});

Route::get('/test3', function () {
    return view('test3');
});