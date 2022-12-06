<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\FoodDiscountController;
use App\Http\Controllers\Admin\FoodPartyController;
use App\Http\Controllers\Admin\FoodTypeController;
use App\Http\Controllers\Admin\RestaurantTypeController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'admin'], function () {
    Route::get('/food-type-tables',[FoodTypeController::class, 'create'] );
    Route::post('/food-type-tables',[FoodTypeController::class, 'read'] );
    Route::patch('/food-type-tables',[FoodTypeController::class, 'update'] );
    Route::delete('/food-type-tables',[FoodTypeController::class, 'delete'] );

    Route::get('/restaurant-type-tables',[RestaurantTypeController::class, 'create'] );
    Route::post('/restaurant-type-tables',[RestaurantTypeController::class, 'read'] );
    Route::patch('/restaurant-type-tables',[RestaurantTypeController::class, 'update'] );
    Route::delete('/restaurant-type-tables',[RestaurantTypeController::class, 'delete'] );

    Route::get('/food-discount-tables',[FoodDiscountController::class, 'create'] );
    Route::post('/food-discount-tables',[FoodDiscountController::class, 'read'] );
    Route::patch('/food-discount-tables',[FoodDiscountController::class, 'update'] );
    Route::delete('/food-discount-tables',[FoodDiscountController::class, 'delete'] );

    Route::get('/food-party-tables',[FoodPartyController::class, 'create'] );
    Route::post('/food-party-tables',[FoodPartyController::class, 'read'] );
    Route::patch('/food-party-tables',[FoodPartyController::class, 'update'] );
    Route::delete('/food-party-tables',[FoodPartyController::class, 'delete'] );

    Route::get('/banner-tables',[BannerController::class, 'create'] );
    Route::post('/banner-tables',[BannerController::class, 'read'] );
    Route::patch('/banner-tables',[BannerController::class, 'update'] );
    Route::delete('/banner-tables',[BannerController::class, 'delete'] );

    Route::get('/comment-tables',[CommentController::class, 'create'] );
    Route::post('/comment-tables',[CommentController::class, 'read'] );
    Route::patch('/comment-tables',[CommentController::class, 'update'] );
    Route::delete('/comment-tables',[CommentController::class, 'delete'] );

    Route::get('/dashboard',function (){
        return view('dashboard');
    } );


});
