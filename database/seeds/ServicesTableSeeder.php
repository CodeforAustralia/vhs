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
                'type' => 'Tenancy',
                'description' => 'Unit 3, 50 Summerhill Road, Reservoir VIC 3073',
                'service_started'=> Carbon::parse('2000-01-01'),
                'service_finished'=> Carbon::parse('2016-02-01'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
              ],
              [
                'reference_id' => '2357111317',
                'type' => 'Bond',
                'description' => '80 Summerhill Road, Reservoir VIC 3073',
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
                ]
          ]);

      } else { echo "services table is not empty, therefore NOT going ahead\n"; }
    }
}
