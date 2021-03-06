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
        $this->call(BusinessesTableSeeder::class);
        $this->call(CardsTableSeeder::class);
        $this->call(HoursTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}