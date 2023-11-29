<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'unauthorized'], function () {
    Route::get('register', [AuthController::class, 'create'])->name('register');
    Route::post('register', [AuthController::class, 'store'])->name('register');
    Route::get('login', [AuthController::class, 'createLogin'])->name('login');
    Route::post('login', [AuthController::class, 'postLogin'])->name('login');

});
Route::group(['middleware' => 'auth'], function () {
    Route::get('user-dashboard', [UserController::class, 'create'])->name('user-dashboard');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
        Route::get('list', [ProductController::class, 'index'])->name('list');
        Route::get('add', [ProductController::class, 'create'])->name('add');
        Route::post('store', [ProductController::class, 'store'])->name('store');
        Route::get('/{product_id}/edit', [ProductController::class, 'edit'])->name('edit');
        Route::put('/{product_id}/update', [ProductController::class, 'update'])->name('update');
        Route::delete('/{product_id}/delete', [ProductController::class, 'destroy'])->name('delete');
    });


});
