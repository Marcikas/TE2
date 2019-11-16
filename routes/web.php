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
})->name('landing');

Route::get('/acesso', function () {
    return view('auth');
})->name('auth');

Auth::routes(
    [
        'reset' => false,
        'confirm' => false,
        'views' => false
    ]
);

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/quotes', 'HomeController@quotes')->name('quotes');
Route::get('/user', 'HomeController@user')->name('user');
