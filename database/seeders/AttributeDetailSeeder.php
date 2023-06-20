<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attribute_details')->insert([
            "category_id" => 1,
            "attribute_id" => 1,
            "property_id" => 1 
        ]);
        
        DB::table('attribute_details')->insert([
            "category_id" => 2,
            "attribute_id" => 1,
            "property_id" => 1
        ]);

        DB::table('attribute_details')->insert([
            "category_id" => 3,
            "attribute_id" => 2,
            "property_id" => 1
        ]);
        DB::table('attribute_details')->insert([
            "category_id" => 1,
            "attribute_id" => 2,
            "property_id" => 1
        ]);

        DB::table('attribute_details')->insert([
            "category_id" => 2,
            "attribute_id" => 2,
            "property_id" => 2
        ]);
    }
}
