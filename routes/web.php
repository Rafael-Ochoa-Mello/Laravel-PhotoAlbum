<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index'])->name('index');
Route::post('/newPost', [PostController::class, 'store'])->name('post.store');
Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('post.destroy');