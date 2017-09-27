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
use App\Models\Letters;
use App\User as User;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewLetter;
use Twilio as Twilio;

Route::get('/', function () {
	return view('auth/login');
});

Auth::routes();
Route::get('/', 'DashboardController@index')->name('dashboard');

Route::group(array('after' => 'auth'), function() {
	Route::get('/notification', function () {
		$user = Auth::user();
		$letter = Letters::first();
		$notify = $user->notify(new NewLetter($letter, $user));
	// echo '<pre>';
	// echo print_r($notify, true);
	// $twilio = new Twilio;
	// $twilio->message($user['mobile'], 'Pink Elephants and Happy Rainbows');

		return view('pages/emailNotification');
	});
});



Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/pdf', 'PdfController@index')->name('pdf');
Route::get('/letters', 'PdfController@allFiles')->name('allFiles');
Route::get('/accounts', 'AccountDetailsController@index')->name('accounts.index');
Route::get('/accounts/{id}', 'AccountDetailsController@view')->name('accounts.view');
Route::get('/accounts/edit/{id}', 'AccountDetailsController@edit')->name('accounts.edit');
Route::post('/accounts/update/user/{id}', 'AccountDetailsController@update')->name('accounts.update');
Route::post('/accounts/update/{id}', 'AccountDetailsController@updatebyadmin')->name('accounts.updatebyadmin');
Route::get('/status', 'StatusController@index')->name('status');
Route::get('/upload', 'UploadController@index');
Route::get('/upload_pdf', 'UploadController@uploadPdf');
// Route::get('/upload', 'UploadController@uploadForm');
Route::post('/upload_pdf', 'UploadController@uploadPdfSubmit');
Route::get('/upload_templatesXml', 'UploadController@uploadTemplatesXml');
Route::post('/upload_templatesXml', 'UploadController@uploadTemplatesXmlSubmit');
Route::get('correspondence', 'DashboardController@index')->name('dashboard'); // if no reference_id route to dashboard
Route::get('correspondence/{reference_id}', 'LettersListController@index');
Route::get('letter/{id}', 'LettersListController@show');
Route::get('actual-letter/{id}', 'ActualLetterController@index');
Route::get('letter-pdfjs/{id}', 'ActualLetterController@pdfjs');

Route::get('/database', 'GenerateController@index')->name('database');
