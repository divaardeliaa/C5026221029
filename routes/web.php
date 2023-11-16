<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('halo', function () {
    //disini bisa diisi apa aja
    return "Halo apa kabar";
});

Route::get('halo2', function () {
    return " <h1> Halo apa kabar</h1>";
});

// Route::get('blog', function () {
//     return view('blog');
// });

Route::get('Tugas1', function () {
    return view('5026221029');
});

Route::get('Tugas2', function () {
    return view('Button-outlines');
});

Route::get('Button-spin', function () {
    return view('Button-spin');
});

Route::get('Button-size', function () {
    return view('Button-size');
});

Route::get('Button-Styles', function () {
    return view('Button-Styles');
});

Route::get('Tugas3', function () {
    return view('Diva-Ardelia-Alyadrus');
});

Route::get('Tugas4', function () {
    return view('hello');
});

Route::get('Tugas5', function () {
    return view('link');
});

Route::get('Tugas6', function () {
    return view('Responsive1');
});

Route::get('Tugas7', function () {
    return view('Responsive2');
});

Route::get('Tugas8', function () {
    return view('js');
});

Route::get('Tugas9', function () {
    return view('js2');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
    return view('home');
});

Route::get('/blog/tentang', function () {
    return view('tentang');
});

Route::get('/blog/kontak', function () {
    return view('contact');
});
