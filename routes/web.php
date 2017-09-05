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
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
	return view('auth/login');
});

Auth::routes();
Route::get('/', function () {
	return view('pages/home');
});



Route::get('/home', 'HomeController@index')->name('ho†me');
Route::get('/pdf', 'PdfController@index')->name('pdf');
Route::get('/letters', 'PdfController@allFiles')->name('allFiles');
Route::get('/accounts', 'AccountDetailsController@index')->name('accounts.index');
Route::get('/accountdetails/{id}', 'AccountDetailsController@view')->name('accounts.view');
Route::get('/accountdetails/edit/{id}', 'AccountDetailsController@edit')->name('accounts.edit');
Route::post('/accounts/update/{id}', 'AccountDetailsController@update')->name('accounts.update');
Route::get('/status', 'StatusController@index')->name('status');
Route::get('/upload', 'UploadController@uploadForm');
Route::post('/upload', 'UploadController@uploadSubmit');


Route::get('/database', 'GenerateController@index')->name('database');

