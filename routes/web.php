<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/iti_blog',[PostController::class,'getPosts'])->name('post.iti_blog');
Route::get('/create_post',function(){return view ('post.create_post');});
Route::get('/view_post/{id}',[PostController::class,'getSinglePost'])->name('post.show');



Route::delete('post/delete/{id}',[PostController::class,'destroy'])->name('post.delete');


Route::get('post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
Route::put('post/update/{id}',[PostController::class,'update'])->name('post.update');


Route::get('post/create',[PostController::class,'create'])->name('post.create');
Route::post('post/store',[PostController::class,'store'])->name('post.store');
