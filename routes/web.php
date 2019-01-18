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
// Route Utama
Route::get('/', function () {
    return view('example.dashboard');
});

// Route Flot
Route::get('/flot', function () {
    return view('example.flot');
});

// Route Morris
Route::get('/morris', function () {
    return view('example.morris');
});

// Route Tables
Route::get('/tables', function () {
    return view('example.tables');
});

// Route Forms
Route::get('/forms', function () {
    return view('example.forms');
});

// Route Panel And Wells
Route::get('/panels-wells', function () {
    return view('example.panels-wells');
});

// Route Buttons
Route::get('/buttons', function () {
    return view('example.buttons');
});

// Route Notifications
Route::get('/notifications', function () {
    return view('example.notifications');
});

// Route Typography
Route::get('/typography', function () {
    return view('example.typography');
});

// Route Icons
Route::get('/icons', function () {
    return view('example.icons');
});

// Route Grid
Route::get('/grid', function () {
    return view('example.grid');
});

// Route Blank
Route::get('/blank', function () {
    return view('example.blank');
});

// Route Login
Route::get('/login', function () {
    return view('example.login');
});
