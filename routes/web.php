<?php

use App\Http\Controllers\CourseGroupsController;
use App\Http\Controllers\SemesterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [SemesterController::class, 'index'])->name('home');

Route::get('/semesters', [SemesterController::class, 'list']);
Route::get('/semester/{id}', [SemesterController::class, 'show']);

Route::get('/courses/semester/{id}', [CourseGroupsController::class, 'list']);
