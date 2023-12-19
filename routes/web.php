<?php


use App\Http\Controllers\EnrollmentsController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\GradesController;
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
Route::get('/', [SiteController::class, 'home']);

Route::get('/students', [StudentsController::class, 'index'])->name('students');
Route::get('/students/create', [StudentsController::class,'create']);
Route::post('/students/create',[StudentsController::class,'store']);
Route::get('/students/{student}',[StudentsController::class,'edit']);
Route::post('/students/{student}',[StudentsController::class,'update']);
Route::delete('/students/delete/{student}',[StudentsController::class,'delete']);


Route::get('/courses', [CoursesController::class, 'index'])->name('courses');
Route::get('/courses/create', [CoursesController::class,'create']);
Route::post('/courses/create',[CoursesController::class,'store']);

Route::get('/enrollments', [EnrollmentsController::class, 'enrollees'])->name('enrollments');
Route::get('/enrollments/{enrollment}',[EnrollmentsController::class,'edit']);
Route::post('/enrollments/{enrollment}',[EnrollmentsController::class,'update']);

Route::get('/grades', [GradesController::class, 'index'])->name('grades');



