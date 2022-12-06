<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\FoodDiscountController;
use App\Http\Controllers\Admin\FoodPartyController;
use App\Http\Controllers\Admin\FoodTypeController;
use App\Http\Controllers\Admin\RestaurantTypeController;
use Illuminate\Support\Facades\Route;


Route::prefix('/food-type-tables')->group(function () {

    Route::get('/',[FoodTypeController::class, 'create'] );
    Route::post('/',[FoodTypeController::class, 'read'] );
    Route::patch('/',[FoodTypeController::class, 'update'] );
    Route::delete('/',[FoodTypeController::class, 'delete'] );
});

Route::prefix('/restaurant-type-tables')->group(function () {

    Route::get('/',[RestaurantTypeController::class, 'create'] );
    Route::post('/',[RestaurantTypeController::class, 'read'] );
    Route::patch('/',[RestaurantTypeController::class, 'update'] );
    Route::delete('/',[RestaurantTypeController::class, 'delete'] );
});

Route::prefix('/food-discount-tables')->group(function () {

    Route::get('/',[FoodDiscountController::class, 'create'] );
    Route::post('/',[FoodDiscountController::class, 'read'] );
    Route::patch('/',[FoodDiscountController::class, 'update'] );
    Route::delete('/',[FoodDiscountController::class, 'delete'] );
});

Route::prefix('/food-party-tables')->group(function () {

    Route::get('/',[FoodPartyController::class, 'create'] );
    Route::post('/',[FoodPartyController::class, 'read'] );
    Route::patch('/',[FoodPartyController::class, 'update'] );
    Route::delete('/',[FoodPartyController::class, 'delete'] );
});

Route::prefix('/banner-tables')->group(function () {

    Route::get('/',[BannerController::class, 'create'] );
    Route::post('/',[BannerController::class, 'read'] );
    Route::patch('/',[BannerController::class, 'update'] );
    Route::delete('/',[BannerController::class, 'delete'] );
});

Route::prefix('/comment-tables')->group(function () {

    Route::get('/',[CommentController::class, 'create'] );
    Route::post('/',[CommentController::class, 'read'] );
    Route::patch('/',[CommentController::class, 'update'] );
    Route::delete('/',[CommentController::class, 'delete'] );
});

Route::prefix('/dashboard/admin')->group(function () {

    Route::get('/',function (){
        return view('dashboard');
    })->name('dashboard');
});
