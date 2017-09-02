<?php

use Illuminate\Database\Seeder;
use Faker as Faker;
use App\Models\Postcode;
use App\Models\Suburb;
use App\User as User;
use App\Models\UserAddress;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

        for($i=0; $i<100; $i++){

            // Generate user data
            $sex = $faker->randomElement(['male', 'female']);
            $reference_id = $faker->unique()->numerify($string = '###########'); 
            $client_id = $faker->unique()->numerify($string = '###########'); 
            $firstName = $faker->firstName($gender = $sex);
            $lastName = $faker->lastname;
            $domainName = $faker->domainName;
            $email = $firstName.$lastName.'@'.$domainName;
            $password = \Hash::make('password');

            $AccountDetails = AccountDetails::all();
            $UserAddress = UserAddress::all();

            // add to user table
            $addToDB = new user;

            $addToDB->gender = $sex;
            $addToDB->reference_id = $reference_id;
            $addToDB->firstName = $firstName;
            $addToDB->lastName = $lastName;
            $addToDB->email = $email;
            $addToDB->password = $password;

            $addToDB->save();

            // Get last inserted ID from users table
            $user_last_id = AccountDetails::getPdo()->lastInsertId();

            // Generate user address data
            $address_1 = $faker->streetAddress;
            $postcode = Postcode::inRandomOrder()->get('postcode');
            // $suburb_town = Postcode::inRandomOrder()->where('postcode_id', $postcode)->get('postcode');

            // add user's address
            $addToDB_userAddress = new UserAddress;

            $addToDB_userAddress->client_id = $client_id;
            $addToDB_userAddress->address_1 = $address_1;
            $addToDB_userAddress->suburb_town = $suburb_town;
            $addToDB_userAddress->postcode = $postcode;
            $addToDB_userAddress->lastName = $lastName;
            $addToDB_userAddress->postal_address_1 = $postal_address_1;
            $addToDB_userAddress->postal_suburb_town = $postal_suburb_town;
            $addToDB_userAddress->postal_postcode = $postal_postcode;

            $addToDB_userAddress->save();
        }


    }
}
