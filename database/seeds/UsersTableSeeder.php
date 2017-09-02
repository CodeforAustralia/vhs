<?php

use Illuminate\Database\Seeder;
use Faker as Faker;

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

            $sex = $faker->randomElement(['male', 'female']);
            $reference_id = $faker->unique()->numerify($string = '###########'); 
            $client_id = $faker->unique()->numerify($string = '###########'); 
            $firstName = $faker->firstName($gender = $sex);
            $lastName = $faker->lastname;
            $domainName = $faker->domainName;
            $email = $firstName.$lastName.'@'.$domainName;
            $password = \Hash::make('password');
        }
    }
}
