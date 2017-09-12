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



Route::get('/', 'createcontroller@home');
Route::get('/add', function(){
	return view('add');
});

Route::POST('/insert', 'createcontroller@add');
Route::get('/update/{id}', 'createcontroller@update');
Route::get('/edit/{id}', 'createcontroller@edit');
Route::get('/read/{id}', 'createcontroller@read');
Route::get('/delete/{id}', 'createcontroller@delete');