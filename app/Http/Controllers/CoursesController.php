<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    // menampilkan data courses
    public function index()
    {
        // mendapatkan data dari table courses
        $courses = Courses::all();

        // panggil view dan kirim data courses
        return view('admin.contents.courses.index', [
            'courses' => $courses,
        ]);
    }

    // method untuk menampilkan form tambahan student
    public function create()
    {
        return view('admin.contents.courses.create');
    }


    // method untuk menyimpan data courses baru
    public function store(Request $request)
    {
        // dd($request -> all());
        //validasi request
        $request->validate([
            'hari' => 'required',
            'ruang' => 'required',
            'waktu' => 'required',
            'matkul' => 'required',
        ]);


        //simpan ke database
        Courses::create([
            'hari' => $request->hari,
            'ruang' => $request->ruang,
            'waktu' => $request->waktu,
            'matkul' => $request->matkul,
        ]);

        // kembalikan ke halaman utama
        return redirect('/admin/courses')->with('message', 'Berhasil Menambahkan Courses');
    }

    // method untuk menampilkan form edit courses
    public function edit($id)
    {
        // cari data courses berdasarkan id'
        $courses = Courses::find($id); // Select * FROM students WHERE id=$id;

        return view('admin.contents.courses.edit', [
            'courses' => $courses
        ]);
    }

    // method untuk menyimpan hasil update 
    public function update($id, Request $request)
    {
        // cari data courses berdasarkan id
        $courses = Courses::find($id); // Select * FROM students WHERE id=$id;

        // validasi request 
        $request->validate([
            'hari' => 'required',
            'ruang' => 'required',
            'waktu' => 'required',
            'matkul' => 'required',
        ]);

        // simpan perubahan
        $courses->update([
            'hari' => $request->hari,
            'ruang' => $request->ruang,
            'waktu' => $request->waktu,
            'matkul' => $request->matkul,
        ]);

        // kembalikan ke halaman utama
        return redirect('/admin/courses')->with('message', 'Berhasil Mengedit Courses');
    }

    // public untuk menghapus courses
    public function destroy($id)
    {
        // cari data courses berdasrkan id
        $courses = Courses::find($id); //Select * FROM courses WHERE id = $id;

        // hapus courses
        $courses->delete();

        // kembalikan ke halaman utama
        return redirect('/admin/courses')->with('message', 'Berhasil Menghapus Courses');
    }
}
