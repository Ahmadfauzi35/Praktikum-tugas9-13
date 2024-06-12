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
            <form action="/admin/student/store/" method="post" class="mt-3">
                @csrf
                <div class="mb-2">
                    <label for="name" class="form-label">Name</label>
                    <input for="text" name="name" id="name" class="form-control">
                </div>

                <div class="mb-2">
                    <label for="nim" class="form-label">NIM</label>
                    <input for="text" name="nim" id="nim" class="form-control">
                </div>

                <div class="mb-2">
                    <label for="major" class="form-label">Major</label>
                    <select name="major" id="major" class="form-select">
                        <option value="">Pilih Jurusan</option>
                        <option value="Teknik Informartika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Bisnis Digital">Bisnis Digital</option>
                    </select>   
                </div>

                <div class="mb-2">
                    <label for="course_id" class="form-label">Courses</label>
                    <select name="course_id" id="course_id" class="form-select">
                        <option value="">Choose a course</option>
                        
                        @foreach($courses as $course)
                            <option value="{{  $course->id  }}">{{  $course->matkul  }}></option>
                        @endforeach
                    </select>   
                </div>

                <div class="mb-2">
                    <label for="class" class="form-label">Class</label>
                    <input for="text" name="class" id="class" class="form-control">
                </div>

                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection