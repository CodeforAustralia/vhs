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
use App\User as User;

Route::get('/', function () {
	return view('pages/home');
});

Route::get('/database', function () {
	$faker = Faker\Factory::create();
	for($i=0; $i<10; $i++){
		
		$sex = $faker->randomElement(['male', 'female']);
		$reference_id = $faker->numerify($string = '###########'); 
		// $test = $faker->firstName($gender = $sex);
		$email = $faker->email;
		echo $reference_id;
		// echo $sex;
		// echo $test;
		// die();
		$users = array(
			'reference_id' => $reference_id, // '609',
			'sex' => $sex,
			'firstName' => $faker->firstName($gender = NULL|$sex),
			'lastName' => $faker->lastName,
			'email' => $email,
			'password' => \Hash::make('password')
			);

		User::create($users);
	}
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('ho†me');
Route::get('/pdf', 'PdfController@index')->name('pdf');
Route::get('/letters', 'PdfController@allFiles')->name('allFiles');
Route::get('/accountdetails', 'AccountDetailsController@index')->name('accountdetails');
Route::get('/status', 'StatusController@index')->name('status');
Route::get('/upload', 'UploadController@uploadForm');
Route::post('/upload', 'UploadController@uploadSubmit');
