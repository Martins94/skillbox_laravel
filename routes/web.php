<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbacksController;
use App\Http\Controllers\PostsController;

Route::get('/', [PostsController::class, 'index'])->name('main');
Route::get('/about', [PostsController::class, 'about'])->name('about');;
Route::get('/contacts', [FeedbacksController::class, 'contacts'])->name('contacts');;
Route::get('/admin/feedbacks', [FeedbacksController::class, 'feedback'])->name('admin.feedbacks');;
Route::post('/posts', [PostsController::class, 'store'])->name('posts');
Route::post('/feedback', [FeedbacksController::class, 'store'])->name('feedbacks');
Route::get('/posts/create', [PostsController::class, 'create'])->name('create');;
Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.show');;
