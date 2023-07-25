<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\ComicsController as GuestComicsController;
use App\Http\Controllers\Admin\ComicsController as AdminComicsController;
use App\Models\Comic;

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

Route::get('/',[GuestComicsController::class,'index'])->name('index');
Route::get('/admin/show/{id}',[AdminComicsController::class,'show'])->name('admin.show');


Route::get('admin/index', [AdminComicsController::class, 'index'])->name('guest.index');
Route::get('/admin/create',[AdminComicsController::class,'create'])->name('admin.create');
Route::post('/admin/store',[AdminComicsController::class,'store'])->name('admin.store');
Route::get('/admin/show/{id}',[AdminComicsController::class,'show'])->name('admin.show');

