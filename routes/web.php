<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController ;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/sukien', [IndexController::class, 'sukien'])->name('sukien');
Route::get('/xoay', [IndexController::class, 'xoay'])->name('xoay');




Route::get('/login', [AuthController ::class, 'login'])->name('login');
Route::post('/login', [AuthController ::class, 'postlogin']);
Route::get('/logout', [AuthController::class, 'getLogout']);

Route::middleware(['auth.user'])->group(function () {
  Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
  Route::get('/showimages', [AdminController::class, 'show'])->name('admin.showimages');
  Route::get('/addimage', [AdminController::class, 'add'])->name('admin.addimage');
  Route::post('/addimage', [AdminController::class, 'uploadimage'])->name('upload.image');
  Route::post('/deleteimage{id}', [AdminController::class, 'deleteimage'])->name('admin.deleteimage');
  Route::get('/editimage{id}', [AdminController::class, 'editimage'])->name('admin.editimage');
  Route::post('/editimage{id}', [AdminController::class, 'updateimage'])->name('admin.updateimage');
  
});