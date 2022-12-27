<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterControllerAdd;
use App\Http\Controllers\ItemController;
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

Route::get('/', [ProjectController::class, 'home']);

Route::get('/about', [ProjectController::class, 'about'])->name('about');
Route::get('/products', [ProjectController::class, 'products'])->name('products');
Route::get('/products/item', [ProjectController::class, 'item'])->name('item');
Route::post('/show', [ProjectController::class, 'show']);

Auth::routes(['verify'=>true]);
Route::get('/home', [HomeController::class, 'account'])->name('home')->middleware('auth');
Route::get('/create', [HomeController::class, 'create'])->name('create');
Route::post('/createNew', [HomeController::class, 'createNew'])->name('createNew');

