<?php

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

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/questions', [App\Http\Controllers\HomeController::class, 'questions'])->name('questions');
Route::post('/sendPost', [App\Http\Controllers\HomeController::class, 'sendPost'])->name('sendPost');
Route::get('/exportExcel', [App\Http\Controllers\HomeController::class, 'exportExcel'])->name('exportExcel');
