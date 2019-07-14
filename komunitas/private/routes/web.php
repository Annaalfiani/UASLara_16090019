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

Route::get('/user', function () {
    return view('Dashboard.default');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/anggota', 'AnggotaController@index')->name('anggota');

Route::get('/galeri', 'GaleriController@index')->name('galeri');

Route::get('/event', 'EventNowController@index')->name('event');

Route::get('/anggota/tambah', 'AnggotaController@create')->name('anggota.tambah');
Route::post('/anggota', 'AnggotaController@store')->name('anggota.store');
Route::get('/anggota/edit/{anggota}', 'AnggotaController@edit')->name('anggota.edit');
Route::patch('/anggota/edit/{anggota}', 'AnggotaController@update')->name('anggota.update');
Route::post('/anggota/hapus/{anggota}', 'AnggotaController@destroy')->name('anggota.delete');

Route::get('/galeri/tambah','GaleriController@create')->name('galeri.tambah');
Route::post('/galeri/tambah','GaleriController@store')->name('galeri.store');
Route::get('/galeri/edit/{galeri}','GaleriController@edit')->name('galeri.edit');
Route::patch('/galeri/edit/{galeri}', 'GaleriController@update')->name('galeri.update');
Route::post('/galeri/hapus/{galeri}', 'GaleriController@destroy')->name('galeri.delete');

Route::get('/event/tambah','EventNowController@create')->name('event.tambah');
Route::post('/event/tambah','EventNowController@store')->name('event.store');
Route::get('/event/edit/{event}','EventNowController@edit')->name('event.edit');
Route::patch('/event/edit/{event}', 'EventNowController@update')->name('event.update');
Route::post('/event/hapus/{event}', 'EventNowController@destroy')->name('event.delete');
 
// Route::get('/register', 'AuthController@getRegister')->middleware('guest')->name('register');
// Route::post('/register', 'AuthController@postRegister')->middleware('guest');
// Route::get('/login', 'AuthController@getLogin')->middleware('guest')->name('login');
// Route::post('/login', 'AuthController@postLogin')->middleware('guest');
// Route::get('/logout', 'AuthController@logout')->middleware('guest')->name('logout');


Route::get('/', 'FrontEndController@userhome')->name('user.home');

Route::get('/login','Auth\LoginController@showLoginForm');
Route::post('/login','Auth\LoginController@login')->name('login');
Route::post('logout','Auth\LoginController@logout')->name('logout');
Route::get('/dashboard','AdminController@index')->name('dashboard');