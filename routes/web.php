<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::get('/inbox', function () {
    return view('pages.inbox');
});

Route::get('/drafts', function () {
    return view('pages.inbox');
});

Route::get('/track', function () {
    return view('pages.inbox');
});

Route::get('/add-profile', function () {
    return view('pages.add-profile');
});


Route::get('/departments', function () {
    return view('pages.departments');
});


Auth::routes();

// Dashboard
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// User Management 
Route::get('/list-users', [App\Http\Controllers\UserController::class, 'index'])->name('List users');
Route::get('/add-user', [App\Http\Controllers\UserController::class, 'create'])->name('add user');
Route::get('/profile-detail/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit user');
Route::post('/user', [App\Http\Controllers\UserController::class, 'store']);
Route::post('/update/user/{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::post('account/change/password', [App\Http\Controllers\UserController::class, 'changePassword']);
Route::delete('/user/{id}', [App\Http\Controllers\UserController::class, 'destroy']);
