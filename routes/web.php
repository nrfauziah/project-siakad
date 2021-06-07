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

//guru
Route::get('dataguru','GuruController@index')->name('dataguru')->middleware(['checkRole:admin,guru']);
Route::get('dataguru/create','GuruController@create')->name('tambahdataguru')->middleware(['checkRole:admin,guru']);
Route::post('dataguru/create','GuruController@store')->name('simpandataguru')->middleware(['checkRole:admin,guru']);

Route::get('dataguru/{id}/edit','GuruController@edit')->middleware(['checkRole:admin,guru']);
Route::post('dataguru/{id}/update','GuruController@update')->middleware(['checkRole:admin,guru']);
Route::get('dataguru/{id}/delete','GuruController@delete')->middleware(['checkRole:admin,guru']);

Route::get('guru', function () { return view('guru'); });

//siswa
Route::get('datasiswa','SiswaController@index')->name('datasiswa')->middleware(['checkRole:admin,guru']);
Route::get('datasiswa/create','SiswaController@create')->name('tambahdatasiswa')->middleware(['checkRole:admin,guru']);
Route::post('datasiswa/create','SiswaController@store')->name('simpandatasiswa')->middleware(['checkRole:admin,guru']);

Route::get('datasiswa/{id}/edit','SiswaController@edit')->middleware(['checkRole:admin,guru']);
Route::post('datasiswa/{id}/update','SiswaController@update')->middleware(['checkRole:admin,guru']);
Route::get('datasiswa/{id}/delete','SiswaController@delete')->middleware(['checkRole:admin,guru']);

Route::get('siswa', function () { return view('/siswa.siswa'); });

//mapel
Route::get('datakelas','KelasController@index')->name('datakelas')->middleware(['checkRole:admin,guru']);
Route::get('datakelas/create','KelasController@create')->name('tambahdatakelas')->middleware(['checkRole:admin,guru']);
Route::post('datakelas/create','KelasController@store')->name('simpandatakelas')->middleware(['checkRole:admin,guru']);

Route::get('datakelas/{id}/edit','KelasController@edit')->middleware(['checkRole:admin,guru']);
Route::post('datakelas/{id}/update','KelasController@update')->middleware(['checkRole:admin,guru']);
Route::get('datakelas/{id}/delete','KelasController@delete')->middleware(['checkRole:admin,guru']);

Route::get('kelas', function () { return view('kelas'); });

//mapel
Route::get('datamapel','MapelController@index')->name('datamapel')->middleware(['checkRole:admin,guru']);
Route::get('datamapel/create','MapelController@create')->name('tambahdatamapel')->middleware(['checkRole:admin,guru']);
Route::post('datamapel/create','MapelController@store')->name('simpandatamapel')->middleware(['checkRole:admin,guru']);

Route::get('datamapel/{id}/edit','MapelController@edit')->middleware(['checkRole:admin,guru']);
Route::post('datamapel/{id}/update','MapelController@update')->middleware(['checkRole:admin,guru']);
Route::get('datamapel/{id}/delete','MapelController@delete')->middleware(['checkRole:admin,guru']);

Route::get('mapel', function () { return view('mapel'); });



