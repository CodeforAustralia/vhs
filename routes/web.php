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
Route::get('/', 'DashboardController@index')->name('dashboard');




Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/pdf', 'PdfController@index')->name('pdf');
Route::get('/letters', 'PdfController@allFiles')->name('allFiles');
Route::get('/accounts', 'AccountDetailsController@index')->name('accounts.index');
Route::get('/accountdetails/{id}', 'AccountDetailsController@view')->name('accounts.view');
Route::get('/accountdetails/edit/{id}', 'AccountDetailsController@edit')->name('accounts.edit');
Route::post('/accounts/update/user/{id}', 'AccountDetailsController@update')->name('accounts.update');
Route::post('/accounts/update/{id}', 'AccountDetailsController@updatebyadmin')->name('accounts.updatebyadmin');
Route::get('/status', 'StatusController@index')->name('status');
Route::get('/upload', 'UploadController@index');
Route::get('/upload_pdf', 'UploadController@uploadPdf');
// Route::get('/upload', 'UploadController@uploadForm');
Route::post('/upload_pdf', 'UploadController@uploadPdfSubmit');
Route::get('/upload_xml', 'UploadController@uploadXml');
Route::post('/upload_xml', 'UploadController@uploadXmlSubmit');


Route::get('/database', 'GenerateController@index')->name('database');

