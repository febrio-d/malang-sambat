<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/adminsignin', [AuthController::class, 'admin_sign'])->name('admin.login')->middleware('guest');
Route::post('/adminsignin', [AuthController::class, 'admin_signin']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth:employee');

Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [AuthController::class, 'signin']);
Route::get('/signup', [AuthController::class, 'signup'])->middleware('guest');
Route::post('/signup', [AuthController::class, 'store']);
Route::post('/signout', [AuthController::class, 'signout']);

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
Route::get('/reports', [HomeController::class, 'reports'])->middleware('auth');
Route::get('/profile', [HomeController::class, 'profile'])->middleware('auth');
Route::get('/profile/edit', [HomeController::class, 'editprofile'])->middleware('auth');
