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



Route::get('/login', 'LoginController@loginPage')->name('login');
Route::get('/info', 'InfoController@infoPage')->name('info');
Route::get('/registreren', 'RegistrerenController@registrerenPage')->name('registreren');
Route::get('/tijdlijn', 'TijdlijnController@tijdlijnPage')->name('tijdlijn');
Route::get('/upload', 'UploadController@uploadPage')->name('upload');

Route::get('/duck', 'DuckController@uploadPage')->name('duck');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/duck/{id}', 'DuckController@showDuck')->where('id', '[0-9]+');

Route::prefix('admin')->group(function () {
    Route::get('gebruiker', function () {
        return 'admin gebruiker';
    });
    Route::get('ducks', function () {
        return 'admin ducks';
    });
    Route::get('categories', function () {
        return 'admin categories';
    });
});
