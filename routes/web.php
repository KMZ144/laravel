<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');


});

Route::middleware('auth')->group(function () {

    Route::get('/iti_blog',[PostController::class,'getPosts'])->name('post.iti_blog')->middleware('auth');
    Route::get('/create_post',function(){return view ('post.create_post');});
    Route::get('/view_post/{id}',[PostController::class,'getSinglePost'])->name('post.show');



    Route::delete('post/delete/{id}',[PostController::class,'destroy'])->name('post.delete');




    Route::get('post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
    Route::put('post/update/{id}',[PostController::class,'update'])->name('post.update');


    Route::get('post/create',[PostController::class,'create'])->name('post.create');
    Route::post('post/store',[PostController::class,'store'])->name('post.store');


    Route::get('/view_user_posts/{id}',[UserController::class,'show'])->name('user.show_posts');





});

