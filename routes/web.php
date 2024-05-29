<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * 1. Get       : untuk menampilkan data
 * 2. Post      : untuk mengirim data
 * 3. Put       : untuk meng-update data
 * 4. Delete    : untuk menghapus data
 */

// Route untuk menampilkan teks salam
Route::get('admin/dashboard', [DashboardController::class, 'index']);

// Route untuk menampikan halaman student
Route::get('/admin/student', [StudentController::class, 'index']);

// Route untuk menampilkan halaman courses
Route::get('admin/courses', [CoursesController::class, 'index']);

// Route untuk menampilkan form tambahan student 
Route::get('admin/student/create', [StudentController::class, 'create']);

// Route untuk menampilkan form tambahan courses 
Route::get('admin/courses/create', [CoursesController::class, 'create']);

// Route untuk mengirim data student baru
Route::post('admin/student/store', [StudentController::class, 'store']);

// Route untuk mengirim data courses baru
Route::post('admin/courses/store', [CoursesController::class, 'store']);

// Route untuk menampilkan halaman edit student 
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);

// Route untuk menampilkan halaman edit courses 
Route::get('admin/courses/edit/{id}', [CoursesController::class, 'edit']);

// Route untuk menyimpan hasil update student
Route::put('admin/student/update/{id}', [StudentController::class, 'update']); 

// Route untuk menyimpan hasil update courses
Route::put('admin/courses/update/{id}', [CoursesController::class, 'update']); 

// Route untuk menghapus student
Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy']); 

// Route untuk menghapus courses
Route::delete('admin/courses/delete/{id}', [CoursesController::class, 'destroy']); 

