<?php
use Illuminate\Database\Seeder;

class UserServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\User::all();


        foreach($users as $user) {
          if ($user->usertype != '1' ) { //do not assign services to admin user

            DB::table('user_services')->insert([
                [
                'user_id' => $user->id,
                'reference_id' => '1923293137'
                ],

                [
                  'user_id' => $user->id,
                  'reference_id' => '2357111317'
                ],

                [
                  'user_id' => $user->id,
                  'reference_id' => '7102878110'
                ]

            ]);
          }
        }
    }
}
