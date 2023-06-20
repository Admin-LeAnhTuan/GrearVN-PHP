<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\ProductDetail;
use App\Models\Property;
use Attribute;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            CommentSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class,
            AttributeSeeder::class,
            ProductDetailSeeder::class,
            PropertySeeder::class,
            AttributeDetailSeeder::class,
            
        ]);
    }
}
