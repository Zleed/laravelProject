<?php

use App\Http\Controllers\FollowController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Auth::routes();


Route::post('/follow/{user}', [FollowController::class, 'store']);

Route::get('/', [PostController::class, 'index']);

Route::get('/p/create', [PostController::class, 'create']);
Route::post('/p', [PostController::class, 'store']);
Route::get('/p/{post}', [PostController::class, 'show']);

Route::get('/profile/{user}', [ProfileController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}/update', [ProfileController::class, 'update'])->name('profile.update');
