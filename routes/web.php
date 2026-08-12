<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;


Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');

Route::get('/categoria/{slug}', [CategoryController::class, 'show'])->name('categories.show');

use App\Http\Controllers\PageController;

Route::get('/politica-de-privacidade', [PageController::class, 'privacy'])->name('pages.privacy');
Route::get('/termos-de-uso', [PageController::class, 'terms'])->name('pages.terms');
Route::get('/sobre', [PageController::class, 'about'])->name('pages.about');
Route::get('/contato', [PageController::class, 'contact'])->name('pages.contact');
Route::post('/contato', [PageController::class, 'sendContact'])->name('pages.contact.send');