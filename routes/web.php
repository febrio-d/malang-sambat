<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminAuthController;

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

Route::get('/adminsignin', [AdminAuthController::class, 'index'])->name('adminsignin')->middleware('guest');
Route::post('/adminsignin', [AdminAuthController::class, 'signin']);
Route::post('/adminsignout', [AdminAuthController::class, 'signout']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard.index')->middleware('auth:employee');

Route::get('/', [AuthController::class, 'index'])->name('usersignin')->middleware('guest');
Route::post('/', [AuthController::class, 'signin']);
Route::get('/signup', [AuthController::class, 'signup'])->middleware('guest');
Route::post('/signup', [AuthController::class, 'store']);
Route::post('/signout', [AuthController::class, 'signout']);

Route::get('/home', [HomeController::class, 'index'])->middleware('auth:web');
Route::post('/home', [HomeController::class, 'reportstore']);
Route::get('/reports', [HomeController::class, 'reports'])->middleware('auth:web');
Route::get('/profile', [HomeController::class, 'profile'])->middleware('auth:web');
