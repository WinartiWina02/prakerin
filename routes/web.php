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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/categori', function () {
    return view('categori');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/fashion', function () {
    return view('categori');
});

Route::get('/style', function () {
    return view('categori');
});

Route::get('/travel', function () {
    return view('categori');
});

Route::get('/video', function () {
    return view('categori');
});

Route::resource('kategori', 'KategoriController');
Route::resource('artikel', 'ArtikelController');
Route::resource('tag', 'TagController');
