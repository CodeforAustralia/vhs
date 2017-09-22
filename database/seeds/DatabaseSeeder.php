<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostcodesTableSeeder::class);
        $this->call(SuburbsTableSeeder::class);
        $this->call(TemplatesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(UserServicesTableSeeder::class);
    }
}
