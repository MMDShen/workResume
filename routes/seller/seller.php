<?php

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Seller\FoodController;
use App\Http\Controllers\Seller\OrderController;
use App\Http\Controllers\Seller\RestaurantController;
use Illuminate\Support\Facades\Route;


Route::prefix('/restaurant')->group(function () {
    Route::get('/',[RestaurantController::class, 'create'] );
    Route::post('/',[RestaurantController::class, 'read'] );
    Route::patch('/',[RestaurantController::class, 'update'] );
    Route::delete('/',[RestaurantController::class, 'delete'] );
});
Route::prefix('/food')->group(function () {

    Route::get('/',[FoodController::class, 'create'] );
    Route::post('/',[FoodController::class, 'read'] );
    Route::patch('/',[FoodController::class, 'update'] );
    Route::delete('/',[FoodController::class, 'delete'] );
});
Route::prefix('/dashboard/seller')->group(function () {

    Route::get('/',[OrderController::class, 'create'] )->name('selling');
    Route::post('/',[OrderController::class, 'read'] );
    Route::patch('/',[OrderController::class, 'update'] );
    Route::delete('/',[OrderController::class, 'delete'] );
});
Route::prefix('/comment')->group(function () {
    Route::get('/',[CommentController::class, 'create'] );
    Route::post('/',[CommentController::class, 'read'] );
    Route::patch('/',[CommentController::class, 'update'] );
    Route::delete('/',[CommentController::class, 'delete'] );
});
