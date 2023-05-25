<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/add', [UserController::class, 'add']);
Route::get('/edit', [UserController::class, 'edit']);
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/role', [RoleController::class, 'index'])->name('role.index');
