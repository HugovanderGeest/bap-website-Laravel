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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'AdminController@index')->name('admin');

Route::get('/info', 'InfoController@infoPage')->name('info');
//Route::get('/registreren', 'RegistrerenController@registrerenPage')->name('registreren');
Route::get('/tijdlijn', 'TijdlijnController@tijdlijnPage')->name('tijdlijn');

// form met upload
Route::get('/upload', 'UploadController@uploadPage')->name('upload.form');
Route::post('/upload', 'UploadController@handelPage')->name('upload.handel');

Route::get('/duck', 'DuckController@uploadPage')->name('duck');

Route::get('/delete/{post}', 'HomeController@deletePost')->name('delete.post');

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
