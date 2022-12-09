<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\FoodDiscountController;
use App\Http\Controllers\Admin\FoodPartyController;
use App\Http\Controllers\Admin\FoodTypeController;
use App\Http\Controllers\Admin\RestaurantTypeController;
use Illuminate\Support\Facades\Route;


Route::prefix('/food-type-table')->group(function () {

    Route::post('/',[FoodTypeController::class, 'create'] );
    Route::get('/',[FoodTypeController::class, 'read'] );
    Route::get('/edit/{id}',[FoodTypeController::class, 'edit'] );
    Route::patch('/{id}',[FoodTypeController::class, 'update'] );
    Route::delete('/{id}',[FoodTypeController::class, 'delete'] );
});

Route::prefix('/restaurant-type-table')->group(function () {

    Route::post('/',[RestaurantTypeController::class, 'create'] );
    Route::get('/',[RestaurantTypeController::class, 'read'] );
    Route::get('/edit/{id}',[RestaurantTypeController::class, 'edit'] );
    Route::patch('/{id}',[RestaurantTypeController::class, 'update'] );
    Route::delete('/{id}',[RestaurantTypeController::class, 'delete'] );
});

Route::prefix('/food-discount-table')->group(function () {

    Route::post('/',[FoodDiscountController::class, 'create'] );
    Route::get('/',[FoodDiscountController::class, 'read'] );
    Route::get('/edit/{id}',[FoodDiscountController::class, 'edit'] );
    Route::patch('/{id}',[FoodDiscountController::class, 'update'] );
    Route::delete('/{id}',[FoodDiscountController::class, 'delete'] );
});

Route::prefix('/food-party-table')->group(function () {

    Route::post('/',[FoodPartyController::class, 'create'] );
    Route::get('/',[FoodPartyController::class, 'read'] );
    Route::get('/edit/{id}',[FoodPartyController::class, 'edit'] );
    Route::patch('/{id}',[FoodPartyController::class, 'update'] );
    Route::delete('/{id}',[FoodPartyController::class, 'delete'] );
});

Route::prefix('/banner-table')->group(function () {

    Route::post('/',[BannerController::class, 'create'] );
    Route::get('/',[BannerController::class, 'read'] );
    Route::delete('/{id}',[BannerController::class, 'delete'] );
});

Route::prefix('/comment-table')->group(function () {

    Route::post('/',[CommentController::class, 'create'] );
    Route::get('/',[CommentController::class, 'read'] );
    Route::get('/edit/{id}',[CommentController::class, 'edit'] );
    Route::patch('/{id}',[CommentController::class, 'update'] );
    Route::delete('/{id}',[CommentController::class, 'delete'] );
});

Route::prefix('/dashboard')->group(function () {

    Route::get('/',function (){
        return view('dashboard');
    })->name('dashboard');
});
