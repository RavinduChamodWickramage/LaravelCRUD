<?php

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

// Route::get('/', function () {
//     return view('frontend.view_students');
// });


Route::get('/', [App\Http\Controllers\RegistationController::class, 'index'])->name('view.students');
Route::get('/add-student', [App\Http\Controllers\RegistationController::class, 'addStudentUI'])->name('add.student');
Route::post('/create-student', [App\Http\Controllers\RegistationController::class, 'createStudent'])->name('create.student');
Route::get('/edit-student/{id}', [App\Http\Controllers\RegistationController::class, 'editStudentUI'])->name('edit.student');
Route::post('/update-student', [App\Http\Controllers\RegistationController::class, 'updateStudent'])->name('update.student');
Route::get('/delete-student/{id}', [App\Http\Controllers\RegistationController::class, 'deleteStudent'])->name('delete.student');

