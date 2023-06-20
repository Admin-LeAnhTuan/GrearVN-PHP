<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('comments', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId("product_id")->index()->constrained("products");
            $table->tinyText("context");
            $table->date("delete_at")->nullable();
            $table->timestamp("create_at")->useCurrent();
            $table->timestamp("update_at")->useCurrent();
        });

        Schema::table('order_details', function (Blueprint $table) {
            // $table->foreign("user_id")->references("id")->on("users");
            // $table->foreign("product_id")->references("id")->on("products");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
