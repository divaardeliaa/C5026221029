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
    return view('index2');
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

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');


Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@lihat');

Route::get('/user', 'App\Http\Controllers\UserController@index');

Route::get('/keranjang-belanja', 'App\Http\Controllers\KeranjangKontroller@index');
Route::get('/keranjang-belanja/hapus/{id}','App\Http\Controllers\KeranjangKontroller@hapus');
Route::get('/keranjang-belanja/tambah','App\Http\Controllers\KeranjangKontroller@beli');
Route::post('/keranjang-belanja/store','App\Http\Controllers\KeranjangKontroller@store');

Route::get('/buku', 'App\Http\Controllers\BukuController@index');
Route::get('/buku/tambah','App\Http\Controllers\BukuController@tambah');
Route::post('/buku/store','App\Http\Controllers\BukuController@store');
Route::get('/buku/edit/{kodebuku}','App\Http\Controllers\BukuController@edit');
Route::post('/buku/update/','App\Http\Controllers\BukuController@update');
Route::get('/buku/hapus/{kodebuku}','App\Http\Controllers\BukuController@hapus');
Route::get('/buku/cari','App\Http\Controllers\BukuController@cari');
Route::get('/buku/view/{id}','App\Http\Controllers\BukuController@lihat');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');
