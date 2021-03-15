<?php

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

Route::get('/list-users', function () {
    return view('pages.list-users');
});

Route::get('/profile-details', function () {
    return view('pages.profile-detail');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
