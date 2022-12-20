<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterControllerAdd;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [ProjectController::class, 'home'])->name('home');

Route::get('/register', [ProjectController::class, 'register']);
Route::get('/about', [ProjectController::class, 'about'])->name('about');

Auth::routes();
Route::get('/account', [HomeController::class, 'account'])->name('account')->middleware('auth');
