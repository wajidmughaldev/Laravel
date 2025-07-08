<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/students', [UserController::class, 'showStudents'])->name('students.show');
Route::get('/student/{id}', [UserController::class, 'showSingleStudent'])->name('student.single.show');
Route::get('/student/{city}', [UserController::class, 'showSingleStudentByCity'])->name('show.single.student.bu.city');
