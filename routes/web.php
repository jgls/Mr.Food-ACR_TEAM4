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
    return view('homepage');
});

Route::get('about',function(){
	return view('aboutUS');
});

Route::get('contact',function(){
	return view('contactUs');
});

Route::get('finalizarLocal',function(){
	return view('encomendar.finalizarPedido1');
});
Route::get('finalizarContacto',function(){
	return view('encomendar.finalizarPedido2');
});
Route::get('finalizarPagamento',function(){
	return view('encomendar.finalizarPedido3');
});
Route::get('finalizarConfirmacao',function(){
	return view('encomendar.finalizarPedido4');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
