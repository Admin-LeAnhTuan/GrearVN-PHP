<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_details')->insert([
            "product_id" => 1,
            "attribute_id" => 1
        ]);

        DB::table('product_details')->insert([
            "product_id" => 1,
            "attribute_id" => 2
        ]);
    }
}
