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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('address');
            $table->double('longitude',10,7);
            $table->double('latitude',10,7);
            $table->string('restaurant_type');
            $table->boolean('is_open')->default(0);
            $table->integer('score')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->on('users')->references('id');
            $table->foreign('restaurant_type')->on('restaurants_type')->references('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
};
