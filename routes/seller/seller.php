<?php

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Seller\FoodController;
use App\Http\Controllers\Seller\OrderController;
use App\Http\Controllers\Seller\RestaurantController;
use Illuminate\Support\Facades\Route;


Route::prefix('/restaurant')->group(function () {
    Route::post('/',[RestaurantController::class, 'create'] );
    Route::get('/',[RestaurantController::class, 'read'] );
    Route::patch('/',[RestaurantController::class, 'update'] );
    Route::delete('/',[RestaurantController::class, 'delete'] );
});
Route::prefix('/food')->group(function () {

    Route::post('/',[FoodController::class, 'create'] );
    Route::get('/',[FoodController::class, 'read'] );
    Route::patch('/',[FoodController::class, 'update'] );
    Route::delete('/',[FoodController::class, 'delete'] );
});
Route::prefix('/dashboard/seller')->group(function () {

    Route::post('/',[OrderController::class, 'create'] )->name('selling');
    Route::get('/',[OrderController::class, 'read'] );
    Route::patch('/',[OrderController::class, 'update'] );
    Route::delete('/',[OrderController::class, 'delete'] );
});
Route::prefix('/comment')->group(function () {
    Route::post('/',[CommentController::class, 'create'] );
    Route::get('/',[CommentController::class, 'read'] );
    Route::patch('/',[CommentController::class, 'update'] );
    Route::delete('/',[CommentController::class, 'delete'] );
});
