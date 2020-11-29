@extends('layout/main')

@section('content')
    <div class="container" style="min-height: 84vh">
      <div class="row">
        <div class="col-6">
          <h1 class="mt-3">Daftar Mahasiswa</h1>
          <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
          {{-- <table class="table table-responsive">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">NPM</th>
                  <th scope="col">Email</th>
                  <th scope="col">Jurusan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($students as $student)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td>{{$student->Nama}}</td>
                  <td>{{$student->NPM}}</td>
                  <td>{{$student->Email}}</td>
                  <td>{{$student->Jurusan}}</td>
                  <td>
                    <a href="" class="badge badge-success">edit</a>
                    <a href="" class="badge badge-danger">delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
          </table> --}}

          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif
          <ul class="list-group">
            @foreach ($students as $student)
            <li class="list-group-item d-flex justify-content-between align-items-center">
              {{$student->Nama}}
            <a href="/students/{{$student->id}}" class="badge badge-info">Detail</a>
            </li>    
            @endforeach
          </ul>
        </div>
      </div>
    </div>
@endsection