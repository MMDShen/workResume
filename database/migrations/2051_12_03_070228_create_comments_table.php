<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('body');
            $table->integer('score');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('food_id');
            $table->unsignedBigInteger('restaurant_id');
            $table->timestamps();
            $table->foreign('restaurant_id')->on('restaurants')->references('id');
            $table->foreign('food_id')->on('foods')->references('id');
            $table->foreign('order_id')->on('orders')->references('id');
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
};
