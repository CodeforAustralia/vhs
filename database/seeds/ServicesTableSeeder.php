<?php

use Illuminate\Database\Seeder;

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
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
              ],
              [
                'reference_id' => '2357111317',
                'type' => 'Bond',
                'description' => '80 Summerhill Road, Reservoir VIC 3073',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ],
              [
                'reference_id' => '7102878110',
                'type' => 'VHR Application',
                'description' => '1 bedroom house',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ]
          ]);

      } else { echo "\e[Table is not empty, therefore NOT going ahead"; }
    }
}
