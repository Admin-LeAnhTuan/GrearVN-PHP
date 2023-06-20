<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId("attribute_id")->constrained("attributes");
            $table->foreignId("category_id")->constrained("categories");
            $table->foreignId("property_id")->constrained("properties");

            $table->timestamp("create_at")->useCurrent();
            $table->timestamp("update_at")->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribute_details');
    }
}
