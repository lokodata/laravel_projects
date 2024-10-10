<?php

use App\Http\Controllers\PostIndexController;
use App\Http\Controllers\PostShowController;
use App\Http\Controllers\TagShowController;
use Illuminate\Support\Facades\Route;

Route::get('/', PostIndexController::class)->name('posts.index');

Route::get('/{post}', PostShowController::class)->name('posts.show');

Route::get('/tags/{tag}', TagShowController::class)->name('tags.show');
