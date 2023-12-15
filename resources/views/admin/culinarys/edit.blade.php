@extends('layouts.admin')

@section('content')
    <h1 class="text-center mb-4">Edit Data Kuliner</h1>


    <div class="container">
     <div class="row justify-content-center">
      <div class="col-8">
       <div class="card">
        <div class="card-body">
         <form action="{{ route('updateKuliner', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" value="{{ $data->title }}">
          </div>
          <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control" name="lokasi" id="lokasi" aria-describedby="emailHelp" value="{{ $data->lokasi }}">
          </div>
          <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" id="foto" aria-describedby="emailHelp" value="{{ $data->foto }}">
          </div>
          <div class="mb-3">
            <label for="kontenKuliner" class="form-label">Deskripsi</label>
            {{-- <textarea class="form-control" id="kontenKuliner" name="kontenKuliner" rows="3" value="{{ $data->kontenKuliner }}"></textarea> --}}
            <input type="text" class="form-control" name="kontenKuliner" id="kontenKuliner" aria-describedby="emailHelp" value="{{ $data->kontenKuliner }}">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>

        </form>
        </div>
       </div>
      </div>
     </div>
    </div>

@endsection

@section('footer')