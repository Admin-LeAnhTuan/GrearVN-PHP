<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("comments")->insert([
            "user_id" => 1,
            "product_id" => 1,
            "context" => "this is context",
            "delete_at" => date("Y-m-d")
        ]);
    }
}
