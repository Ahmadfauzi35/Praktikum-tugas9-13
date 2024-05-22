<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // method untuk menampilkan data student
    public function index(){
        // tarik data dari student dari db
        $students = Student::all();

    // panggil view dan kirim data sudents
        return view('admin.contents.student.index', [
            'students' => $students, 
        ]);
    }
}
