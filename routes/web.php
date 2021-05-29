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
    return view('welcome', ['title' => 'Apk Sistem Akademik']);
});

Route::get('/login', 'AuthController@login');

Route::get('home', function () {
    return view('main');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
Route::get('guru','GuruController@index')->name('guru')->middleware(['checkRole:admin,guru']);
Route::get('datasiswa','SiswaController@index')->name('datasiswa')->middleware(['checkRole:admin,guru']);
Route::get('datasiswa/create','SiswaController@create')->name('tambahdatasiswa')->middleware(['checkRole:admin,guru']);
Route::get('siswa', function () { return view('siswa'); });



