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
    return view('welcome');
});



Route::get('/business', function () {
    return view('pro.business');
})->name('business');



Route::get('/register, function () {
    return view('pro.register');
	
})->name('registr');; 


Route::get('user/{id}', 'ShowProfile');


