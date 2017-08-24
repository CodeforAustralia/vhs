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

Route::get('/', function () {
    return view('pages/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('ho†me');
Route::get('/pdf', 'PdfController@index')->name('pdf');
Route::get('/letters', 'PdfController@allFiles')->name('allFiles');
Route::get('/yourdetails', 'YourDetailsController@index')->name('yourdetails');
Route::get('/status', 'StatusController@index')->name('status');
Route::get('/upload', 'UploadController@uploadForm');
Route::post('/upload', 'UploadController@uploadSubmit');