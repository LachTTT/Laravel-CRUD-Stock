<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'homePage')->defaults('title', 'Home Page');
    Route::get('/create', 'createPage')->defaults('title', 'Create Page');
    Route::get('/read', 'viewPage')->defaults('title', 'Read Page');
    Route::get('/edit', 'editPage')->defaults('title', 'Edit Page');
});

Route::get('/registrasi', [AuthController::class, 'showRegistrasi'])->name('registrasi');

Route::resource('items', ItemController::class)->except(['create', 'show']);
Route::get('/read', [ItemController::class, 'index'])->name('items.read');
