@extends('admin.main')

@section('content')
<div class="pagetitle">
    <h1>Edit Student</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"></li>
            <li class="breadcrumb-item active">Edit Student</li>
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
                    <input type="text" name="name" id="name" class="form-control" value="{{ $student->name ?? '' }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control" value="{{ $student->nim ?? '' }}">
                    @error('nim')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="major" class="form-label">Major</label>
                    <select name="major" id="major" class="form-select">
                        <option value="">Pilih Jurusan</option>
                        <option value="Teknik Informatika" {{ $student->major == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                        <option value="Sistem Informasi" {{ $student->major == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
                        <option value="Bisnis Digital" {{ $student->major == 'Bisnis Digital' ? 'selected' : '' }}>Bisnis Digital</option>
                    </select>
                    @error('major')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-2">
                        <label for="course_id" class="form-label">Courses</label>
                        <select name="course_id" id="course_id" class="form-select">
                            <option value="">Select a Course</option>
                            
                            @foreach($courses as $course)
                               <option value="{{ $course->id }}" {{ $student->courses_id == $course->id ? 'selected' : '' }}>{{ $course->matkul }}</option>
                            @endforeach
                        </select>
                    </div>

                <div class="mb-2">
                    <label for="class" class="form-label">Class</label>
                    <input type="text" name="class" id="class" class="form-control" value="{{ $student->class ?? '' }}">
                    @error('class')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
