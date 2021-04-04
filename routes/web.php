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


Route::get('profile/add-profile', function () {
    return view('pages.add-profile');
});


Auth::routes();
// Dashboard
Route::get('/notifications', [App\Http\Controllers\HomeController::class, 'getNotifications'])->name('notification');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('inbox', [App\Http\Controllers\ProfileController::class, 'inbox'])->name('inbox');

// Profile
Route::get('profile/track', [App\Http\Controllers\ProfileController::class, 'index'])->name('track');
Route::get('profile/drafts', [App\Http\Controllers\ProfileController::class, 'index'])->name('drafts');
Route::get('profiles', [App\Http\Controllers\ProfileController::class, 'index'])->name('all');
Route::get('forward/new/{id}', [App\Http\Controllers\ProfileController::class, 'forwardAsNew'])->name('forward');
Route::get('profile/details/{id}', [App\Http\Controllers\ProfileController::class, 'getProfileById'])->name('single profile');
Route::post('profile/sign/or/reject', [App\Http\Controllers\ProfileController::class, 'sigOrReject']);
Route::get('profile/delete/{id}', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('destroy');
Route::get('profile/resubmit/{id}', [App\Http\Controllers\ProfileController::class, 'reSubmit'])->name('reSubmit');

// User Management 
Route::get('user/list-users', [App\Http\Controllers\UserController::class, 'index']);
Route::get('user/add-user', [App\Http\Controllers\UserController::class, 'create']);
Route::get('user/profile-detail/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/user', [App\Http\Controllers\UserController::class, 'store']);
Route::post('/update/user/{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::post('account/change/password', [App\Http\Controllers\UserController::class, 'changePassword']);
Route::get('/user/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy']);

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

// Time Line
Route::get('timeline', [App\Http\Controllers\TimeLineController::class, 'store']);
Route::post('timeline/reply/note', [App\Http\Controllers\TimeLineController::class, 'replyNote']);

// Profile Management
Route::get('profile/add-profile', [App\Http\Controllers\ProfileController::class, 'create']);
Route::post('profile/add-profile', [App\Http\Controllers\ProfileController::class, 'store']);
Route::post('updateUser', [App\Http\Controllers\ProfileController::class, 'updateUser']);
Route::post('stageThree', [App\Http\Controllers\ProfileController::class, 'stageThree']);
Route::post('stageFour', [App\Http\Controllers\ProfileController::class, 'stageFour']);
Route::post('stageFive', [App\Http\Controllers\ProfileController::class, 'stageFive']);

Route::get('myinbox', [App\Http\Controllers\ProfileController::class, 'testind']);



