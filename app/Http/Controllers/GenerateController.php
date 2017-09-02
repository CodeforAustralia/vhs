<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generate;
use Database\Factories;
use App\User as User;
use App\Models\UserAddress;
use App\Models\AccountDetails;
use App\Models\Postcode;
use App\Models\Suburb;
use Illuminate\Database\Seeder;
use Faker as Faker;

class GenerateController extends Controller
{
    //

	public function index()
	{

		$faker = Faker\Factory::create();

		for($i=0; $i<10; $i++){

            // Generate user data
			$sex = $faker->randomElement(['male', 'female']);
			$reference_id = $faker->unique()->numerify($string = '###########'); 
			$client_id = $faker->unique()->numerify($string = '######'); 
			$firstName = $faker->firstName($gender = $sex);
			$lastName = $faker->lastname;
			$domainName = $faker->domainName;
			$email = $firstName.$lastName.'@'.$domainName;
			$password = \Hash::make('password');

            // add to user  to the database
			$addToDB = new user;

			$addToDB->gender = $sex;
			$addToDB->client_id = $client_id;
			$addToDB->reference_id = $reference_id;
			$addToDB->firstName = $firstName;
			$addToDB->lastName = $lastName;
			$addToDB->email = $email;
			$addToDB->password = $password;

			$addToDB->save();

            // Get last inserted ID from users table
			$user_last_id = $addToDB->id;
            // echo $user_last_id;
            // die;

            // Generate user address data
			$address_1 = $faker->streetAddress;
			$postcode = Postcode::all()->random();
			$suburb_town = Suburb::where('postcode_id', $postcode['id'])->first();

			// Generate user postal data
			$postal_address_1 = $faker->streetAddress;
			$postal_postcode = Postcode::all()->random();
			$postal_suburb_town = Suburb::where('postcode_id', $postcode['id'])->first();


            // add user's address to the database
			$addToDB_userAddress = new UserAddress;

			$addToDB_userAddress->user_id = $user_last_id;
			$addToDB_userAddress->address_1 = $address_1;
			$addToDB_userAddress->suburb_town = $suburb_town['name'];
			$addToDB_userAddress->postcode = $postcode['postcode'];
			$addToDB_userAddress->postal_address_1 = $postal_address_1;
			$addToDB_userAddress->postal_suburb_town = $postal_suburb_town['name'];
			$addToDB_userAddress->postal_postcode = $postal_postcode['postcode'];

			$addToDB_userAddress->save();
		}
		$AccountDetails = AccountDetails::all();
		$UserAddress = UserAddress::all();

		return view('pages/account/index')->with([
			'AccountDetails' => $AccountDetails,
			'UserAddress' => $UserAddress
			]);
	}

}
