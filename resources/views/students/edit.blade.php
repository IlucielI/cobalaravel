@extends('layout/main')

@section('content')
    <div class="container" style="min-height: 84vh">
      <div class="row">
        <div class="col-8">
          <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>
          
          <form method="post" action="/students/{{$student->id}}">
            @method('patch')
            @csrf
            <div class="form-group">
              <label for="Nama">Nama</label>
            <input type="text" class="form-control @error('Nama') is-invalid @enderror" name="Nama" id="Nama" placeholder="Masukkan Nama" value="{{$student->Nama}}">
              @error('Nama')
              <div class="invalid-feedback">{{$message}}</div>  
              @enderror
            </div>
            <div class="form-group">
              <label for="NPM">NPM</label>
            <input type="text" class="form-control @error('NPM') is-invalid @enderror" name="NPM" id="NPM" placeholder="Masukkan NPM" value="{{$student->NPM}}">
              @error('NPM')
              <div class="invalid-feedback">{{$message}}</div>  
              @enderror
            </div>
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="text" class="form-control @error('Email') is-invalid @enderror" name="Email" id="Email" placeholder="Masukkan Email" value="{{$student->Email}}">
              @error('Email')
              <div class="invalid-feedback">{{$message}}</div>  
              @enderror
            </div>
            <div class="form-group">
              <label for="Jurusan">Jurusan</label>
              <input type="text" class="form-control @error('Jurusan') is-invalid @enderror" name="Jurusan" id="Jurusan" placeholder="Masukkan Jurusan" value="{{$student->Jurusan}}">
              @error('Jurusan')
              <div class="invalid-feedback">{{$message}}</div>  
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Ubah data</button>
          </form>

        </div>
      </div>
    </div>
@endsection