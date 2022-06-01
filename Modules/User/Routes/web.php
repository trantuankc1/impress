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
use Modules\User\Http\Controllers\AboutUsController;
use Modules\User\Http\Controllers\Auth\LoginController;
use Modules\User\Http\Controllers\Auth\LogoutController;
use Modules\User\Http\Controllers\Auth\RegisterController;
use Modules\User\Http\Controllers\Auth\VerifyController;
use Modules\User\Http\Controllers\CategoryProductController;
use Modules\User\Http\Controllers\ContactController;
use Modules\User\Http\Controllers\DetailProductController;
use Modules\User\Http\Controllers\EnquiryController;
use Modules\User\Http\Controllers\HomeController;
use Modules\User\Http\Controllers\OrderProductController;
use Modules\User\Http\Controllers\OurProductController;
use Modules\User\Http\Controllers\ProjectController;

//Home
Route::get('/', [HomeController::class, 'home'])->name('user.home');

//About Us
Route::get('/about', [AboutUsController::class, 'aboutUs'])->name('user.aboutUs');

//Detail
Route::get('/detail/{id}', [DetailProductController::class, 'detail'])->name('user.detail');

//Enquiry
Route::get('/enquiry', [EnquiryController::class, 'enquiry'])->name('user.enquiry');

//Order Product
Route::get('/addCart/{id}', [OrderProductController::class, 'addCart'])->name('user.addCart');

Route::patch('/updateCart', [OrderProductController::class, 'updateCart'])->name('user.updateCart');

Route::get('/deleteCart/{id}', [OrderProductController::class, 'deleteCart'])->name('user.deleteCart');

Route::post('/buyProduct', [OrderProductController::class, 'buyProduct'])->name('user.buyProduct');

Route::get('/orderConfirmed/{id}', [OrderProductController::class, 'orderConfirmed'])->name('user.orderConfirmed');

//Project
Route::get('/project', [ProjectController::class, 'project'])->name('user.project');

//Our Product
Route::get('/product', [OurProductController::class, 'ourProduct'])->name('user.ourProduct');

//Category Product
Route::get('/categoryProduct/{id}', [CategoryProductController::class,  'categoryProduct'])->name('user.categoryProduct');

//Contact
Route::get('/contact', [ContactController::class, 'contact'])->name('user.contact');

Route::post('/addContact', [ContactController::class, 'addContact'])->name('user.addContact');


//Auth
Route::get('/login', [LoginController::class, 'showLogin'])->name('user.login');

Route::post('/login', [LoginController::class, 'login'])->name('user.login');

Route::get('/logout', [LogoutController::class, 'logout'])->name('user.logout');

Route::get('/register', [RegisterController::class, 'showRegister'])->name('user.register');

Route::post('/register', [RegisterController::class, 'register'])->name('user.registers');

Route::get('/verify', [VerifyController::class, 'showVerify'])->name('user.verify');

Route::post('/verify/{id}', [VerifyController::class, 'verify'])->name('user.verify');

Route::get('/verify/account/{id}', [VerifyController::class, 'verifyAccount'])->name('user.verifyAccount');
