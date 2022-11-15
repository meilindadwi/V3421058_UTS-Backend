<?php

use App\Http\Controllers\Admin58Controller;
use App\Http\Controllers\Agama58Controller;
use App\Http\Controllers\Auth\Login58Controller;
use App\Http\Controllers\Auth\Register58Controller;
use App\Http\Controllers\DetailData58Controller;
use App\Http\Controllers\User58Controller;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', function () {
    return redirect('/admin58');
});
Route::get('/login58', [Login58Controller::class, 'showLoginForm'])->name('login');
Route::post('/login58', [Login58Controller::class, 'login']);
Route::get('/register58', [Register58Controller::class, 'showRegistrationForm'])->name('register');
Route::post('/register58', [Register58Controller::class, 'register']);
Route::get('/logout58', [Login58Controller::class, 'logout'])->name('logout');

Auth::routes(['login' => false, 'register' => false]);
Route::middleware('auth', 'isAdmin')->group(function () {
    Route::get('/admin58', function () {
        return redirect('/admin58/dashboard58');
    });
    Route::get('/admin58/dashboard58', [Admin58Controller::class, 'index58']);
    Route::post('/admin58/dashboard58/update-foto-profil58', [Admin58Controller::class, 'update_foto58']);
    Route::get('/admin58/approve58/{id}', [User58Controller::class, 'approve58']);
    Route::get('/admin58/data-agama58', [Agama58Controller::class, 'index58']);
    Route::post('/admin58/data-agama58/create58', [Agama58Controller::class, 'create58']);
    Route::get('/admin58/data-agama58/edit58/{id}', [Agama58Controller::class, 'edit58']);
    Route::post('/admin58/data-agama58/update58', [Agama58Controller::class, 'update58']);
    Route::get('/admin58/data-agama58/delete58/{id}', [Agama58Controller::class, 'delete58']);
    Route::get('/admin58/dashboard58/detail58/{id}', [DetailData58Controller::class, 'index58']);
});
Route::middleware('auth', 'isUser')->group(function () {
    Route::get('/dashboard58', [User58Controller::class, 'index58'])->name('home');
    Route::get('/dashboard58/edit-data58', [User58Controller::class, 'edit58']);
    Route::get('/dashboard58/ganti-password58', [User58Controller::class, 'gantipass58']);
    Route::post('/dashboard58/update-password58', [User58Controller::class, 'updatepass58']);
    Route::post('/dashboard58/update-data58', [User58Controller::class, 'update58']);
    Route::post('/dashboard58/update-foto-profil58', [Admin58Controller::class, 'update_foto58']);
});