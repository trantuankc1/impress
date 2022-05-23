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
use Modules\User\Http\Controllers\Auth\LoginController;
use Modules\User\Http\Controllers\Auth\LogoutController;
use Modules\User\Http\Controllers\Auth\RegisterController;
use Modules\User\Http\Controllers\Auth\VerifyController;
use Modules\User\Http\Controllers\UserController;


Route::get('/', [UserController::class, 'index'])->name('user.index');

Route::get('/about', [UserController::class, 'aboutUs'])->name('user.aboutUs');

Route::get('/project', [UserController::class, 'project'])->name('user.project');

Route::get('/product', [UserController::class, 'ourProduct'])->name('user.ourProduct');

Route::get('/detail', [UserController::class, 'detailProduct'])->name('user.detailProduct');

Route::get('/contact', [UserController::class, 'contact'])->name('user.contact');

Route::get('/detail', [UserController::class, 'detailProduct'])->name('user.detail');

Route::get('/enquiry', [UserController::class, 'enquiry'])->name('user.enquiry');

Route::get('/login', [LoginController::class, 'showLogin'])->name('user.login');

Route::post('/login', [LoginController::class, 'login'])->name('user.login');

Route::get('/logout', [LogoutController::class, 'logout'])->name('user.logout');

Route::get('/register', [RegisterController::class, 'showRegister'])->name('user.register');

Route::post('/register', [RegisterController::class, 'register'])->name('user.registers');

Route::get('/verify', [VerifyController::class, 'showVerify'])->name('user.verify');

Route::post('/verify/{id}', [VerifyController::class, 'verify'])->name('user.verify');

Route::get('/verify/account/{id}', [VerifyController::class, 'verifyAccount'])->name('user.verifyAccount');
