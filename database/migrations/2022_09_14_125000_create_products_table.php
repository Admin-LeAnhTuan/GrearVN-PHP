<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("title", 40)->unique();
            $table->foreignId("category_id")->constrained("categories");
            $table->unsignedDouble("price");
            $table->integer("discount")->nullable();
            $table->string("thumbnail", 250);
            $table->longText("description")->nullable();
            $table->timestamp("create_at")->useCurrent();
            $table->timestamp("update_at")->useCurrent();
            $table->date("deleted_at")->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
