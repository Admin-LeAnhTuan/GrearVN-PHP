<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("orders")->insert([
            "user_id" => 1,
            "note" => null,
            "total" => "2000",
            "order_date" => date("Y-m-d"),
        ]);

        DB::table("orders")->insert([
            "user_id" => 1,
            "note" => null,
            "total" => "3000",
        ]);
    }
}
