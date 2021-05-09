<?php

use App\Http\Controllers\API\ApiController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes with sanctum auth
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth:sanctum'], function () {
  
});

Route::post('login', [UserController::class, 'api_login']);
Route::group(
  [
    'prefix' => 'store/{id}'
  ],
  function () {

    /*
    |--------------------------------------------------------------------------
    | CATEGORY
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'category', 'as' => 'category'], function () {
      Route::get('all', [ApiController::class, 'get_categories'])->name('all');
      Route::get('{id2}', [ApiController::class, 'get_category'])->name('one');
      Route::post('', [ApiController::class, 'post_category'])->name('store');
      Route::post('{id2}', [ApiController::class, 'put_category'])->name('update');
      Route::delete('{id2}', [ApiController::class, 'delete_category'])->name('delete');
    });

    /*
    |--------------------------------------------------------------------------
    | PRODUCT
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'product', 'as' => 'product'], function () {
      Route::get('all', [ApiController::class, 'get_products'])->name('all');
      Route::get('{id2}', [ApiController::class, 'get_product'])->name('one');
      Route::post('', [ApiController::class, 'post_product'])->name('store');
      Route::post('{id2}', [ApiController::class, 'put_product'])->name('update');
      Route::post('{id2}/variant/{id3}', [ApiController::class, 'put_product_variant'])->name('update.variant');
      Route::delete('{id2}', [ApiController::class, 'delete_product'])->name('delete');
    });

    /*
    |--------------------------------------------------------------------------
    | COLLECT
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'collect', 'as' => 'collect'], function () {
      Route::get('all', [ApiController::class, 'get_collects'])->name('all');
      Route::get('{id2}', [ApiController::class, 'get_collect'])->name('one');
      Route::post('', [ApiController::class, 'post_collect'])->name('store');
      Route::delete('{id2}', [ApiController::class, 'delete_collect'])->name('delete');
    });

    /*
    |--------------------------------------------------------------------------
    | DISCOUNT
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'price-rule', 'as' => 'price_rule'], function () {
      Route::get('all', [ApiController::class, 'get_price_rules'])->name('all');
      Route::get('{id2}', [ApiController::class, 'get_price_rule'])->name('one');
      Route::post('', [ApiController::class, 'post_price_rule'])->name('store');
      Route::post('{id2}', [ApiController::class, 'put_price_rule'])->name('update');
      Route::delete('{id2}', [ApiController::class, 'delete_price_rule'])->name('delete');

      Route::get('{id2}/discount-code/all', [ApiController::class, 'get_discount_codes'])->name('discount_code.all');
      Route::get('{id2}/discount-code/{id3}', [ApiController::class, 'get_discount_code'])->name('discount_code.one');
      Route::post('{id2}/discount-code', [ApiController::class, 'post_discount_code'])->name('discount_code.store');
      Route::post('{id2}/discount-code/{id3}', [ApiController::class, 'put_discount_code'])->name('discount_code.update');
      Route::delete('{id2}/discount-code/{id3}', [ApiController::class, 'delete_discount_code'])->name('discount_code.delete');
    });

    /*
    |--------------------------------------------------------------------------
    | ORDER
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'order', 'as' => 'order'], function () {
      Route::get('all', [ApiController::class, 'get_orders'])->name('all');
      Route::get('{id2}', [ApiController::class, 'get_order'])->name('one');
      // Route::post('', [ApiController::class, 'post_order'])->name('store');
      Route::post('{id2}', [ApiController::class, 'put_order'])->name('update');
      Route::delete('{id2}', [ApiController::class, 'delete_order'])->name('delete');
    });
  }
);