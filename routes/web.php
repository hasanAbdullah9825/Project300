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

 Route::resource('/client','ClientController');

Route::get('/clients', function () {
    return view('clients');
})->name('clients');



Route::get('/clients_new', function () {
    return view('clients_new');
})->name('clients_new');

Route::get('/book_room', function () {
    return view('book_room');
})->name('book_room');
