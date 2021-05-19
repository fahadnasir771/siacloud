<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes([
    'register' => false
]);

Route::group([
    'middleware' => 'auth'
], function(){
    // Navigation
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/shopify', [HomeController::class, 'shopify'])->name('shopify');
    Route::post('/token-expiry', [HomeController::class, 'token_expiry'])->name('token_expiry');

    // Store
    Route::resource('/store', StoreController::class);

});


