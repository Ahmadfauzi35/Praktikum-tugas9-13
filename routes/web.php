<?php

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
Route::get('/admin/students', [StudentController::class, 'index']);