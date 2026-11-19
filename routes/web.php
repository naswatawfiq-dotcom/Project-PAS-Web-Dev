<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/about', [AboutController::class, 'index'])->name('admin.about');

// Rute untuk menampilkan data siswa (nama rute: admin.students)
Route::get('/admin/student', [StudentController::class, 'index'])->name('admin.students');

// Rute untuk menyimpan data siswa dari form modal (nama rute: admin.students.store)
Route::post('/admin/student', [StudentController::class, 'store'])->name('admin.students.store');

// Rute untuk menghapus data siswa (nama rute: admin.students.destroy)
Route::delete('/admin/student/{id}', [StudentController::class, 'destroy'])->name('admin.students.destroy');

// PERBAIKAN: Mengubah Classroom menjadi resource route agar store, update, dan destroy otomatis terdaftar
Route::resource('admin/classrooms', ClassroomController::class)->names('admin.classrooms');

Route::resource('admin/subjects', SubjectController::class)->names('admin.subjects');
Route::resource('admin/teachers', TeacherController::class)->names('admin.teachers');
