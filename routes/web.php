<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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
//hello

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');

Route::put('/posts/update/{id}', [PostController::class, 'update'])->name('posts.update');

Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/comments/create', [CommentController::class, 'create'])->name('comments.create');

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('/comments/edit/{id}', [CommentController::class, 'edit'])->name('comments.edit');

Route::put('/comments/update/{id}', [CommentController::class, 'update'])->name('comments.update');

Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');

//  Route::get('/userNames/{user?}', function ($user = null) {
//      return view('usersPage', ['user' =>$user]); //root model binding
//  });

Route::get('/', function () {
    return view('mainIndex');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
