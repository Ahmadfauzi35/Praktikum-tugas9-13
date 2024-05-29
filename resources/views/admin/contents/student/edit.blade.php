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
            <form action="/admin/student/update/{{ $student->id }}" method="POST" class="mt-3">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <label for="name" class="form-label">Name</label>
                    <input for="text" name="name" id="name" class="form-control" value="{{ $student->name ?? '' }}">
                </div>

                <div class="mb-2">
                    <label for="nim" class="form-label">NIM</label>
                    <input for="text" name="nim" id="nim" class="form-control" value="{{ $student->nim ?? '' }}">
                </div>

                <div class="mb-2">
                    <label for="name" class="form-label">Major</label>
                    <select name="major" id="major" class="form-select">
                        <option value="">Pilih Jurusan</option>
                        <option value="Teknik Informartika" {{ $student->major == 'Teknik Informatika' ? 'selected' : ''}}>Teknik Informatika</option>
                        <option value="Sistem Informasi" {{ $student->major == 'Sistem Informasi' ? 'selected' : ''}}>Sistem Informasi</option>
                        <option value="Bisnis Digital"{{ $student->major == 'Bisnis Digital' ? 'selected' : ''}}>Bisnis Digital</option>
                    </select>
                </div>

                <div class="mb-2">
                    <label for="class" class="form-label">Class</label>
                    <input for="text" name="class" id="class" class="form-control" value="{{ $student->class ?? '' }}">
                </div>

                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection