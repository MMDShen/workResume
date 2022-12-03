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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('raw_material');
            $table->string('image');
            $table->integer('price');
            $table->string('food_type');
            $table->unsignedBigInteger('food_discount_id');
            $table->unsignedBigInteger('food_party_id');
            $table->unsignedBigInteger('restaurant_id');
            $table->foreign('restaurant_id')->on('restaurants')->references('id');
            $table->foreign('food_party_id')->on('food_party')->references('id');
            $table->foreign('food_discount_id')->on('foods_discount')->references('id');
            $table->foreign('food_type')->on('foods_type')->references('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
};
