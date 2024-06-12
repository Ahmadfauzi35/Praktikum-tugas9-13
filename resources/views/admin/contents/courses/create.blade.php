@extends('admin.main')

@section('content')
<div class="pagetitle">
    <h1>Courses</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"></li>
            <li class="breadcrumb-item active">Courses/li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="card">
        <div class="card-body">
            <form action="/admin/courses/store/" method="post" class="mt-3">
                @csrf
                <div class="mb-2">
                    <label for="hari" class="form-label">Hari</label>
                    <input type="text" name="hari" id="hari" class="form-control">
                </div>

                <div class="mb-2">
                    <label for="nim" class="form-label">Ruang</label>
                    <input type="text" name="ruang" id="ruang" class="form-control">
                </div>

                <div class="mb-2">
                    <label for="waktu" class="form-label">Waktu</label>
                    <input type="time" name="waktu" id="waktu" class="form-control">
                </div>


                <div class="mb-2">
                    <label for="name" class="form-label">Matkul</label>
                    <select name="matkul" id="matkul" class="form-select">
                        <option value="">Pilih Mata Kuliah</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                    </select>
                </div>

                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection