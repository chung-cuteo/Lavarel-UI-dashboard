<?php

use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Admin\Projects;
use App\Http\Controllers\Admin\User;
use Illuminate\Support\Facades\Route;

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


Route::redirect('/', '/login');

Route::get('/login', [Auth::class, 'login'])->name('login');
Route::post('/login', [Auth::class, 'handleLogin'])->name('handle-login');
Route::get('/register', [Auth::class, 'register'])->name('register');
Route::get('/forgot-password', [Auth::class, 'forgotPassword'])->name('forgot-password');
Route::get('/reset-password', [Auth::class, 'resetPassword'])->name('reset-password');

Route::prefix('dashboard')->group(function () {
    Route::get('/top', [Dashboard::class, 'index'])->name('dashboard.top');
});


Route::prefix('projects')->group(function () {
    Route::get('/request-quotation', [Projects::class, 'requestQuotation'])->name('projects.request-quotation');
    Route::get('/request-quotation/{id}/edit', [Projects::class, 'detaiRequestQuotation']);
    Route::get('/word-mouth', [Projects::class, 'wordMouth'])->name('projects.word-mouth');
    Route::get('/occupation', [Projects::class, 'occupation'])->name('projects.occupation');
});

Route::get('/user', [User::class, 'index'])->name('user');
