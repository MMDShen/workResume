<?php

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Seller\FoodController;
use App\Http\Controllers\Seller\OrderController;
use App\Http\Controllers\Seller\RestaurantController;
use Illuminate\Support\Facades\Route;


Route::prefix('/restaurant')->group(function () {
    Route::post('/',[RestaurantController::class, 'create'] );
    Route::get('/',[RestaurantController::class, 'read'] );
    Route::get('/edit/{id}',[RestaurantController::class, 'edit'] );
    Route::patch('/{id}',[RestaurantController::class, 'update'] );
    Route::delete('/{id}',[RestaurantController::class, 'delete'] );
});
Route::prefix('/food')->group(function () {

    Route::post('/',[FoodController::class, 'create'] );
    Route::get('/',[FoodController::class, 'read'] );
    Route::get('/edit/{id}',[FoodController::class, 'edit'] );
    Route::patch('/{id}',[FoodController::class, 'update'] );
    Route::delete('/{id}',[FoodController::class, 'delete'] );
});
Route::prefix('/order')->group(function () {

    Route::post('/',[OrderController::class, 'create'] )->name('selling');
    Route::get('/',[OrderController::class, 'read'] );
    Route::get('/edit/{id}',[OrderController::class, 'edit'] );
    Route::patch('/{id}',[OrderController::class, 'update'] );
    Route::delete('/{id}',[OrderController::class, 'delete'] );
});
Route::prefix('/comment')->group(function () {
    Route::post('/',[CommentController::class, 'create'] );
    Route::get('/',[CommentController::class, 'read'] );
    Route::get('/edit/{id}',[CommentController::class, 'edit'] );
    Route::patch('/{id}',[CommentController::class, 'update'] );
    Route::delete('/{id}',[CommentController::class, 'delete'] );
});
