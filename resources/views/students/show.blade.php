@extends('layout/main')

@section('content')
    <div class="container" style="min-height: 84vh">
      <div class="row">
        <div class="col-6">
          <h1 class="mt-3">Detail Mahasiswa</h1>
          
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$student->Nama}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$student->NPM}}</h6>
              <p class="card-text">{{$student->Email}}</p>
              <p class="card-text">{{$student->Jurusan}}</p>
              <a href="{{$student->id}}/edit" class="btn btn-success">Edit</a>
              <form action="/students/{{$student->id}}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              <a href="/students" class="card-link">Kembali</a>
            </div>
          </div>

        </div>
      </div>
    </div>
@endsection