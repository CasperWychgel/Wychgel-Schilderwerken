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
    return view('pages.welcome');
});

Route::get('/portfolio', function () {
    return view('pages.portfolio');
});

Route::get('/instagram', function () {
    return view('pages.instagram');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/info', function () {
    return view('pages.info');
});