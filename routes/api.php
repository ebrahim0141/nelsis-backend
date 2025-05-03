<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
 
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api')->name('logout');
    Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('auth:api')->name('refresh');
    Route::post('/me', [AuthController::class, 'me'])->middleware('auth:api')->name('me');

    Route::get('/all-product', [ProductController::class, 'all'])->middleware('auth:api')->name('all-product');
    Route::post('/store-product', [ProductController::class, 'storeOrUdate'])->middleware('auth:api')->name('store-product');
    Route::get('/product/{id}', [ProductController::class, 'getDataById'])->middleware('auth:api')->name('product/id');
    Route::delete('/delete/{id}', [ProductController::class, 'delete'])->middleware('auth:api')->name('delete');
});
