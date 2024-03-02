<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/BrandList',[BrandController::class,'BrandList']);

Route::get('/CategoryList',[CategoryController::class,'CategoryList']);

Route::get('/ListProductByCategory/{id}',[ProductController::class,'ListProductByCategory']);
Route::get('/ListProductByBrand/{id}',[ProductController::class,'ListProductByBrand']);
Route::get('/ListProductByRemark/{remark}',[ProductController::class,'ListProductByRemark']);

Route::get('/ListProductSlider',[ProductController::class,'ListProductSlider']);

Route::get('/ProductDetailsById/{id}',[ProductController::class,'ProductDetailsById']);

Route::get('/ListReviewByProduct/{product_id}',[ProductController::class,'ListReviewByProduct']);

Route::get('/PolicyByType/{type}',[PolicyController::class,'PolicyByType']);
