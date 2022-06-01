<?php

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

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\LoginAdminController;
use Modules\Admin\Http\Controllers\LogoutAdminController;

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::resource('products', ProductController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('users', UserController::class);
    Route::resource('listContact', ContactController::class);
    Route::resource('order', OrderController::class);
    Route::resource('orderDetail', OrderDetailController::class);
    Route::resource('admins', ListAdminController::class)->middleware('CheckLoginSupperAdmin');
    Route::get('/login', [LoginAdminController::class, 'showLogin'])->name('admin.showLogin')->middleware('CheckLoginAdmin');
    Route::post('/login', [LoginAdminController::class, 'login'])->name('admin.login');
    Route::get('/logout', [LogoutAdminController::class, 'logout'])->name('admin.logout');
});




