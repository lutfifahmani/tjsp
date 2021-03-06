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
    return view('welcome');
});

Route::get('/', 'FrontController@home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ubah-profil', 'BeritaController@profil');
Route::post('/update-profilnya', 'BeritaController@updateprofil');


Route::get('/tambah-berita', 'BeritaController@create')->name('tambah-berita');
Route::get('/list-berita', 'BeritaController@index')->name('list-berita');


Route::get('/tambah-perusahaan', 'PerusahaanController@create')->name('tambah-perusahaan');
Route::get('/list-perusahaan', 'PerusahaanController@index');
Route::post('/add-perusahaan', 'PerusahaanController@store');
Route::post('update-perusahaan/{id}', 'PerusahaanController@update');
Route::delete('hapus-perusahaan/{id}', 'PerusahaanController@destroy');


Route::get('/tambah-laporan', 'ReportController@create');
Route::get('/list-laporan', 'ReportController@index');

Route::get('/laporan', 'FrontController@indexdepan');
Route::get('/perusahaan', 'FrontController@perusahaandepan');
Route::get('/galeri', 'FrontController@galeridepan');
Route::get('/perusahaan/{id}', 'FrontController@perusahaansatu');
Route::get('/laporan/{id}', 'FrontController@laporansatu');
Route::get('/berita/{slug}', 'FrontController@beritasatu');
Route::get('/csr/{program}/{pemohon}', 'FrontController@laporandepan');
Route::get('/berita', 'FrontController@beritadepan');
Route::get('/profil', 'FrontController@profil');



Route::post('/add-laporan', 'ReportController@store');
Route::post('update-laporan/{id}', 'ReportController@update');
Route::delete('hapus-laporan/{id}', 'ReportController@destroy');


Route::get('/tambah-berita', 'BeritaController@create')->name('tambah-berita');
Route::get('/list-berita', 'BeritaController@index');
Route::post('/add-berita', 'BeritaController@store');
Route::post('update-berita/{id}', 'BeritaController@update');
Route::delete('hapus-berita/{id}', 'BeritaController@destroy');
Route::post('ckeditor/upload', 'BeritaController@upload')->name('berita.upload');


Route::get('/ajukan-permohonan', 'RequestController@create');
Route::get('/list-pengajuan', 'RequestController@index');
Route::post('/add-pengajuan', 'RequestController@store');

Route::get('/list-gallery', 'GalleryController@index');
Route::delete('hapus-gallery/{id}', 'GalleryController@destroy');


