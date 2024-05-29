@extends('admin.main')

@section('content')
<div class="pagetitle">
    <h1>+ Student</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"></li>
            <li class="breadcrumb-item active">+ Student</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="card">
        <div class="card-body">
            <form action="/admin/courses/update/{{ $courses->id }}" method="POST" class="mt-3">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <label for="hari" class="form-label">Hari</label>
                    <input for="text" name="hari" id="hari" class="form-control" value="{{ $courses->hari ?? '' }}">
                </div>

                <div class="mb-2">
                    <label for="ruang" class="form-label">Ruang</label>
                    <input for="text" name="ruang" id="ruang" class="form-control" value="{{ $courses->ruang ?? '' }}">
                </div>

                <div class="mb-2">
                    <label for="waktu" class="form-label">Waktu</label>
                    <input for="time" name="waktu" id="waktu" class="form-control" value="{{ $courses->waktu ?? '' }}">
                </div>

                <div class="mb-2">
                    <label for="matkul" class="form-label">Major</label>
                    <select name="matkul" id="matkul" class="form-select">
                        <option value="">Pilih Jurusan</option>
                        <option value="Jaringan Komputer" {{ $courses->matkul == 'Jaringan Komputer' ? 'selected' : ''}}>Jaringan Komputer</option>
                        <option value="Pemrograman Web" {{ $courses->matkul == 'Pemrograman Web' ? 'selected' : ''}}>Pemrograman Web</option>
                        <option value="Basis Data"{{ $courses->matkul == 'Basis Data' ? 'selected' : ''}}>Basis Data</option>
                        <option value="Bahasa Inggris"{{ $courses->matkul == 'Bahasa Inggris' ? 'selected' : ''}}>Bahasa Inggris</option>
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