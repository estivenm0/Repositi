<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::middleware([
    'auth:sanctum', 
    config('jetstream.auth_session'),
    'access:1'
    ])->prefix('/admin')->group(function(){

    Route::get('/', [AdminController::class, 'index'])->name('home.admin');

    Route::get('/webs', [AdminController::class, 'webs'])->name('webs.admin');

    Route::get('/tags', [AdminController::class, 'tags'])->name('tags.admin');

    Route::get('/feedbacks', [AdminController::class, 'feedbacks'])->name('feedbacks.admin');

    Route::get('/users', [AdminController::class, 'webs'])->name('users.admin');
});
