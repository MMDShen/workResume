<?php

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Seller\FoodController;
use App\Http\Controllers\Seller\OrderController;
use App\Http\Controllers\Seller\RestaurantController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'seller'], function () {
    Route::get('/restaurant',[RestaurantController::class, 'create'] );
    Route::post('/restaurant',[RestaurantController::class, 'read'] );
    Route::patch('/restaurant',[RestaurantController::class, 'update'] );
    Route::delete('/restaurant',[RestaurantController::class, 'delete'] );

    Route::get('/food',[FoodController::class, 'create'] );
    Route::post('/food',[FoodController::class, 'read'] );
    Route::patch('/food',[FoodController::class, 'update'] );
    Route::delete('/food',[FoodController::class, 'delete'] );

    Route::get('/dashboard',[OrderController::class, 'create'] );
    Route::post('/dashboard',[OrderController::class, 'read'] );
    Route::patch('/dashboard',[OrderController::class, 'update'] );
    Route::delete('/dashboard',[OrderController::class, 'delete'] );

    Route::get('/comment',[CommentController::class, 'create'] );
    Route::post('/comment',[CommentController::class, 'read'] );
    Route::patch('/comment',[CommentController::class, 'update'] );
    Route::delete('/comment',[CommentController::class, 'delete'] );

});
