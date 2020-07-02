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

Route::get('/', function() {
    return view('items.table');
});

Route::get('/data-tables', function(){
    return view('items.script');
});

Route::get('/register', 'AuthController@form');

Route::get('/welcome', 'AuthController@welcome');

Route::get('/blank', function() {
    return view('layouts/blank');
});

Route::get('/items' , function(){
    return view('items/index');
});

