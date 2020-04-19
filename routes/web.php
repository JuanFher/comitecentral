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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('colleges', 'CollegeController')->only(['index', 'store', 'update', 'destroy']);
Route::resource('courses', 'CourseController')->only(['index', 'store', 'update', 'destroy']);
Route::resource('students', 'StudentController')->only(['index', 'store', 'update', 'destroy']);
Route::resource('treasurers', 'TreasurerController')->only(['index', 'store', 'update', 'destroy']);
Route::resource('roles', 'RoleController')->only(['index', 'store', 'update', 'destroy']);
Route::resource('permissions', 'PermissionController')->only(['index', 'store', 'update', 'destroy']);
Route::resource('users', 'UserController')->only(['index', 'store', 'update', 'destroy']);
Route::resource('incomes', 'IncomeController');
Route::resource('expenses', 'ExpenseController');

