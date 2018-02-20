<?php

use Illuminate\Database\Seeder;

class BusinessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('businesses')->insert([
            'business_name' => 'Bywater',
            'address_line_1' => 'Bywater',
            'address_line_2' => 'Bywater',
            'city' => 'Asheville',
            'state' => 'NC',
            'zip_code' => '28806',
            'website_url' => 'Bywater',
            'img_front' => 'Bywater',
            'img_back' => 'Bywater'
        ]);
        
        DB::table('businesses')->insert([
            'business_name' => 'Shakeys',
            'address_line_1' => 'Shakeys',
            'address_line_2' => 'Shakeys',
            'city' => 'Asheville',
            'state' => 'NC',
            'zip_code' => '28806',
            'website_url' => 'Shakeys',
            'img_front' => 'Shakeys',
            'img_back' => 'Shakeys'
        ]);

        DB::table('businesses')->insert([
            'business_name' => 'Desoto',
            'address_line_1' => 'Desoto',
            'address_line_2' => 'Desoto',
            'city' => 'Asheville',
            'state' => 'NC',
            'zip_code' => '28806',
            'website_url' => 'Desoto',
            'img_front' => 'Desoto',
            'img_back' => 'Desoto'
        ]);
    }
}
