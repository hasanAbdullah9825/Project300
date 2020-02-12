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
})->name('home');

 Route::resource('/client','ClientController');

  route::get('/abailroom/{id}','RoomnewController@abailRoom')->name('abailroom');
  route::get('/bookroom/{id}/{id2}','RoomnewController@bookRoom')->name('bookroom');

 route::get('/bookroom/{id}/{id2}','RoomnewController@bookRoom')->name('bookroom');
  route::get('/reservation','RoomnewController@AllReservedCustomer')->name('reservation');
 route::get('/destroy/{id}/{clientid}','RoomnewController@destroyClient')->name('destroy');





Route::get('/clients', function () {
    return view('clients');
})->name('clients');



Route::get('/clients_new', function () {
    return view('clients_new');
})->name('clients_new');

Route::get('/book_room', function () {
    return view('book_room');
})->name('book_room');
