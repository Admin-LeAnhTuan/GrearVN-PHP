<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            "name" => "Laptop gaming"
        ]);

        DB::table('categories')->insert([
            "name" => "Laptop văn phòng"
        ]);

        DB::table('categories')->insert([
           
            "name" => "Tai nghe"
        ]);

        DB::table('categories')->insert([
           
            "name" => "Bàn phím"
        ]);

        DB::table('categories')->insert([
           
            "name" => "Chuột"
        ]);
    }
}
