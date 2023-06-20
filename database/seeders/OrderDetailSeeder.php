<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            "product_id" => 1,
            "order_id" => 1,
            "amount" => 1,
            "price" => 3000,

        ]);

        DB::table('order_details')->insert([
            "product_id" => 1,
            "order_id" => 2,
            "amount" => 2,
            "price" => 300,

        ]);

        DB::table('order_details')->insert([
            "product_id" => 2,
            "order_id" => 1,
            "amount" => 1,
            "price" => 5000,
        ]);
    }
}
