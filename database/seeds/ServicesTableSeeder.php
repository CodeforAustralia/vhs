<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      // check if table users is empty
      if(DB::table('services')->get()->count() == 0){

          DB::table('services')->insert([

              [
                'reference_id' => '1923293137',
                'type' => 'Housing Application',
                'description' => '1 bedroom flat',
                'service_started'=> Carbon::parse('2000-01-01'),
                'service_finished'=> Carbon::parse('2016-02-01'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
              ],
              [
                'reference_id' => '2357111317',
                'type' => 'Housing Application',
                'description' => '2 bedroom flat',
                'service_started'=> Carbon::parse('2000-01-01'),
                'service_finished'=> Carbon::parse('2016-02-01'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
              ],

              [
                'reference_id' => '7102878110',
                'type' => 'VHR Application',
                'description' => '1 bedroom house',
                'service_started'=> date('Y-m-d'),
                'service_finished'=> null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
              ],

              [
                'reference_id' => '1103013',
                'type' => 'Bond',
                'description' => '25 Hogwarts Lane, Melbourne VIC 3000',
                'service_started'=> date('Y-m-d'),
                'service_finished'=> null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
              ],

              [
                'reference_id' => '1215000628',
                'type' => 'Tenancy',
                'description' => '25 Hogwarts Lane, Melbourne VIC 3000',
                'service_started'=> date('Y-m-d'),
                'service_finished'=> null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
              ],

              [
                'reference_id' => '1235255457',
                'type' => 'Tenancy',
                'description' => '4 Privet Drive, Little Whinging VIC 3123',
                'service_started'=> date('Y-m-d'),
                'service_finished'=> null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
              ],

              [
                'reference_id' => '9182393123',
                'type' => 'Housing Application',
                'description' => '4 bedroom house',
                'service_started'=> date('Y-m-d'),
                'service_finished'=> null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
              ],

              [
                'reference_id' => '7123456789',
                'type' => 'Housing Application',
                'description' => '3 bedroom house',
                'service_started'=> date('Y-m-d'),
                'service_finished'=> null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
              ]
          ]);

      } else { echo "services table is not empty, therefore NOT going ahead\n"; }
    }
}
