<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('article', [ArticleController::class, 'store'])->name('article.store');
Route::get('article/index', [ArticleController::class, 'show'])->name('article.index');
