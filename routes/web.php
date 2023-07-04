<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);
Route::get('/authors/{user:username}', [PostController::class, "byAuthor"]);
Route::get('/categories/{category:slug}', [PostController::class, "byCategory"]);
Route::get('/categories', [CategoryController::class, 'index']);


// * Dashboard Routes
Route::middleware(['auth'])->prefix('/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
});

// * Authentication Routes
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'loginIndex']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'registerIndex']);
    Route::post('/register', [AuthController::class, 'register']);
});