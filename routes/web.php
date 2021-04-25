<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminUserController;
use \App\Http\Controllers\AdminCategoryController;
use \App\Http\Controllers\UploadController;
use \App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class,'index'])->name('index');
Route::group(['prefix'=>'admin','middleware'=>'roles','roles'=>'admins'],function (){
    Route::resource('users',AdminUserController::class);
    Route::resource('categories',AdminCategoryController::class);
});
Route::get('category/{id}',[PagesController::class,'viewCategory'])->name('category');
Route::get('book/{id}',[PagesController::class,'viewBook'])->name('book')->middleware('auth');
Route::post('comment/{id}',[PagesController::class,'addComment'])->name('comment')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('upload',[UploadController::class,'index'])->name('upload')->middleware('auth');
Route::post('upload',[UploadController::class,'upload'])->name('upload.save')->middleware('auth');;
