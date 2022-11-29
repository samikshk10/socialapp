<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\registerController;
use App\Http\Controllers\PostController;

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

Route::get('/', [home::class, 'dashboard'])->name('dashboard')->middleware(['auth']);
Route::get('/addnew', [home::class, 'add'])->name('addnew');

Route::post('/addnew', [PostController::class, 'addpost'])->name('addposts');

Route::get('/login', [home::class, 'login'])->name('login');
Route::post('/login', [registerController::class, 'loginuser'])->name('loginuser');

Route::get('/register', [home::class, 'register'])->name('register');
Route::post('/register', [registerController::class, 'registeruser'])->name('registeruser');


Route::get('/logout', [registerController::class, 'logout'])->name('logout');
Route::get('/delete/{id}', [PostController::class, 'delete'])->middleware(['auth']);
