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
            <a href="/admin/courses/create" class="btn btn-primary my-4">+ Courses</a>
            <table class="table mt-2">
                <tr>
                    <th>No</th>
                    <th>Hari</th>
                    <th>Ruang</th>
                    <th>Waktu</th>
                    <th>Matkul</th>
                    <th>Action</th>
                </tr>

                @foreach($courses as $courses)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $courses->hari }}</td>
                    <td>{{ $courses->ruang }}</td>
                    <td>{{ $courses->waktu }}</td>
                    <td>{{ $courses->matkul }}</td>
                    <td class="d-flex">
                        <a href="/admin/courses/edit/{{ $courses->id }}" class="btn btn-warning me-2" >Edit</a>
                        <form action="/admin/courses/delete/{{ $courses->id }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah Anda Yakin')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@endsection