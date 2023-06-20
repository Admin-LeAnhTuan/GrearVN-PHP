<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('properties')->insert([
            "name" => "Thương hiệu"
        ]);

        DB::table('properties')->insert([
            "name" => "CPU"
        ]);
    }
}
