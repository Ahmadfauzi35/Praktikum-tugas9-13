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

    // method untuk menampilkan form tambahan student
    public function create(){
        return view('admin.contents.student.create');
    }


    // method untuk menyimpan data student baru
    public function store(Request $request)
    {
        //validasi request
        $request->validate([
            'name' => 'required',
            'nim' => 'required|numeric',
            'major' => 'required',
            'class' => 'required',
        ]);
    

        //simpan ke database
        Student::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major ,
            'class' => $request->class,
        ]);

        // kembalikan ke halaman utama
        return redirect('/admin/student')->with ('message', 'Berhasil Menambahkan Student');
    }

    // method untuk menampilkan form edit student
    public function edit($id)
    {
        // cari data student berdasarkan id'
        $student = Student::find($id); // Select * FROM students WHERE id=$id;

        return view('admin.contents.student.edit', [
            'student' => $student
        ]);
    }

    // method untuk menyimpan hasil update 
    public function update($id, Request $request){
        // cari data student berdasarkan id
        $student = Student::find($id); // Select * FROM students WHERE id=$id;

        // validasi request 
        $request->validate([
            'name' => 'required',
            'nim' => 'required|numeric',
            'major' => 'required',
            'class' => 'required',
        ]);

        // simpan perubahan
        $student->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
        ]);

        // kembalikan ke halaman utama
        return redirect('/admin/student')->with ('message', 'Berhasil Mengedit Student');
    }

    // public untuk menghapus student
    public function destroy($id){
        // cari data student berdasrkan id
        $student = Student::find($id); //Select * FROM students WHERE id = $id;

        // hapus student
        $student->delete();

        // kembalikan ke halaman utama
        return redirect('/admin/student')->with ('message', 'Berhasil Menghapus Student');
    }
}
