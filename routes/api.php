<?php

use App\Http\Controllers\API\ApiController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:sanctum'], function(){
  Route::get('/store/{id}/categories', [ApiController::class, 'get_categories'])->name('get_categories');
  Route::get('/store/{id}/category/{id2}', [ApiController::class, 'get_category'])->name('get_category');
  Route::post('/store/{id}/category', [ApiController::class, 'post_category'])->name('post_category');
  Route::post('/store/{id}/category/{id2}', [ApiController::class, 'put_category'])->name('put_category');
  Route::delete('/store/{id}/category/{id2}', [ApiController::class, 'delete_category'])->name('delete_category');
});

Route::post('login', [UserController::class, 'api_login']);


