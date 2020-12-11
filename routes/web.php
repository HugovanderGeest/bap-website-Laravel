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

Route::get('/duck/{categry}/{id}', 'DuckController@showDuck');

Route::get('/login', 'LoginController@loginPage')->name('login');
Route::get('/info', 'InfoController@infoPage')->name('info');
Route::get('/registreren', 'registrerenController@registrerenPage')->name('registreren');
Route::get('/tijdlijn', 'tijdlijnController@tijdlijnPage')->name('tijdlijn');
Route::get('/upload', 'uploadController@uploadPage')->name('upload');

Route::get('/duck', 'DuckController@uploadPage')->name('duck');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
