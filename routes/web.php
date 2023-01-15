<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterControllerAdd;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PhotoController;
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
Route::post('/show', [ProjectController::class, 'show']);
Route::get('/support', [ProjectController::class, 'support'])->name('support');

Auth::routes(['verify'=>true]);
Route::get('/home', [HomeController::class, 'account'])->name('home')->middleware('auth');
Route::get('/create', [HomeController::class, 'create'])->name('create');
Route::post('/createNew', [HomeController::class, 'createNew'])->name('createNew');

Route::get('/edit_profile', [HomeController::class, 'edit_profile'])->name('edit_profile');
Route::post('/update', [HomeController::class, 'update']);

Route::post('/edit', [HomeController::class, 'edit'])->name('edit');
Route::get('/edit_item', [HomeController::class, 'edit_item']);

Route::post('/remove', [HomeController::class, 'remove'])->name('remove');

Route::get('/remove_item', [HomeController::class, 'remove_item']);

Route::get('/delete', [HomeController::class, 'delete'])->name('delete');
Route::post('/erase', [HomeController::class, 'erase'])->name('erase');

Route::post('save', [HomeController::class, 'store'])->name('upload.picture')->middleware('auth');