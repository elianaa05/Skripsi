<?php

use App\Http\Controllers\BarangController;
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
    return view('welcome');
});
Route::get('/layouts', function(){
    return view('layouts.layouts');
});
Route::get('/', function(){
    return view('frontend.index');
});

Route::resource('category', 'KategoriController');
Route::resource('user', 'PenggunaController');
Route::resource('barangs', 'BarangController');


//backend
Route::get('/barangs', 'BarangController@index')->name('barangs');
Route::get('/barangs/create', 'BarangController@create')->name('tambahbarang');
Route::get('/barangs/store', 'BarangController@create')->name('simpan');
Route::get('/users', 'PenggunaController@index')->name('users');
Route::get('/users/create', 'PenggunaController@create')->name('tambahuser');
Route::get('/kategori', 'KategoriController@index')->name('kategori');
//Route::get('/kategori/edit/{idkategori}', 'KategoriController@edit')->name('editkategori');
Route::post('/kategori/update/{idkategori}', 'KategoriController@update')->name('updatekategori');
Route::get('/kategori/create', 'KategoriController@create')->name('tambahkategori');
Route::get('/barangjual', 'BarangJualanController@index')->name('barangjual');

Route::delete('/hapuskategori/{idkategori}', 'KategoriController@destroy')->name('hapuskategori');


//frontend
Route::get('baranguser', 'BarangJualanController@indexbarangjual')->name('baranguser');
Route::get('baranguser/detail/{id}', 'BarangJualanController@show')->name('baranguser.detail');
Route::get('booking', 'BarangJualanController@bookingbarangjual')->name('booking');
Route::get('tambahbooking', 'NotaController@create')->name('tambahbooking');
Route::get('pedagang', 'PenggunaController@userindex')->name('pedagang');
Route::get('kategoribarang', 'KategoriController@kategorifrontend')->name('/kategoribarang');
Route::get('lelanguser', 'LelangController@lelanguser')->name('lelanguser');



Route::get('/about', function(){
    return view('frontend.about');
});
Route::get('/lelang', function(){
    return view('frontend.lelang');
});
