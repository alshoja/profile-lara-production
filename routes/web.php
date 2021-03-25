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

Route::get('profile/drafts', function () {
    return view('pages.inbox');
});

Route::get('profile/track', function () {
    return view('pages.inbox');
});

Route::get('profile/add-profile', function () {
    return view('pages.add-profile');
});


Auth::routes();

// Dashboard
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// User Management 
Route::get('user/list-users', [App\Http\Controllers\UserController::class, 'index'])->name('List users');
Route::get('user/add-user', [App\Http\Controllers\UserController::class, 'create'])->name('add user');
Route::get('user/profile-detail/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit user');
Route::post('/user', [App\Http\Controllers\UserController::class, 'store']);
Route::post('/update/user/{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::post('account/change/password', [App\Http\Controllers\UserController::class, 'changePassword']);
Route::delete('/user/{id}', [App\Http\Controllers\UserController::class, 'destroy']);

Route::get('departments', [App\Http\Controllers\DepartmentController::class, 'index']);
Route::get('department/{id}', [App\Http\Controllers\DepartmentController::class, 'show']);
Route::post('list/departments', [App\Http\Controllers\DepartmentController::class, 'list']);
Route::post('department', [App\Http\Controllers\DepartmentController::class, 'store']);
Route::put('department', [App\Http\Controllers\DepartmentController::class, 'update']);
Route::delete('department/{id}', [App\Http\Controllers\DepartmentController::class, 'destroy']);

Route::post('section', [App\Http\Controllers\SectionController::class, 'store']);
Route::delete('section/{id}', [App\Http\Controllers\SectionController::class, 'destroy']);
Route::get('section/{id}', [App\Http\Controllers\SectionController::class, 'show']);
Route::put('section', [App\Http\Controllers\SectionController::class, 'update']);
Route::post('list/sections', [App\Http\Controllers\SectionController::class, 'index']);

// List of Tags- Permitted Users
Route::post('user/permissions', [App\Http\Controllers\UserPermission::class, 'index']);
Route::get('user/permissions/{role}/{id}', [App\Http\Controllers\UserPermission::class, 'getUserTagsBy']);

// General Director
Route::post('user/permission/gd', [App\Http\Controllers\GeneralDirectorController::class, 'store']);
Route::delete('user/permission/gd/{userId}/{depId}', [App\Http\Controllers\GeneralDirectorController::class, 'destroy']);

// Director 
Route::post('user/permission/director', [App\Http\Controllers\DirectorController::class, 'store']);
Route::delete('user/permission/director/{userId}/{depId}', [App\Http\Controllers\DirectorController::class, 'destroy']);

// Department Head
Route::post('user/permission/dh', [App\Http\Controllers\DepartmentHeadsController::class, 'store']);
Route::delete('user/permission/dh/{userId}/{depId}', [App\Http\Controllers\DepartmentHeadsController::class, 'destroy']);

//  Department Supervisors
Route::post('user/permission/super', [App\Http\Controllers\DepartmentSupervisorController::class, 'store']);
Route::delete('user/permission/super/{userId}/{depId}', [App\Http\Controllers\DepartmentSupervisorController::class, 'destroy']);


