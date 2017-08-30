<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generate;
use Database\Factories;
use App\User as User;
use App\Models\AccountDetails;
use Illuminate\Database\Seeder;
use Faker as Faker;

class GenerateController extends Controller
{
    //

	public function index()
	{
		$faker = Faker\Factory::create();

		for($i=0; $i<200; $i++){

			$sex = $faker->randomElement(['male', 'female']);
			$reference_id = $faker->numerify($string = '###########'); 
			$firstName = $faker->firstName($gender = $sex);
			$lastName = $faker->lastname;
			$email = $faker->email;
			$password = \Hash::make('password');

			$AccountDetails = AccountDetails::all();
			$addToDB = new user;

            $addToDB->sex = $sex;
            $addToDB->reference_id = $reference_id;
            $addToDB->firstName = $firstName;
            $addToDB->lastName = $lastName;
            $addToDB->email = $email;
            $addToDB->password = $password;

            $addToDB->save();
		}
		
		return view('pages/database')->with([
			'AccountDetails' => $AccountDetails
			]);
	}

}
