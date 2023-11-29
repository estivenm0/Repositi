<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Models\Web;
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

Route::get('/', [Controller::class, 'index']);
Route::get('/wuest/{tag?}', [Controller::class, 'wuest'])->name('wuest');
Route::get('/Repositi', [Controller::class, 'about'])->name('about.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/panel', function () {
        return view('user.dashboard');
    })->name('dashboard');

    Route::get('/u/{nickname}', [UserController::class, 'show'])->name('profile');
});


