@extends('layouts.admin')

@section('content')
    <h1 class="text-center mb-4">Edit Data Akomodasi</h1>


    <div class="container">
     <div class="row justify-content-center">
      <div class="col-8">
       <div class="card">
        <div class="card-body">
         <form action="{{ route('updateAkomodasi', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
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
            <input type="file" class="form-control" name="foto" id="foto" aria-describedby="emailHelp" value="{{ \Storage::url($data->foto) }}">
          </div>
          <div class="mb-3">
            <label for="check_in" class="form-label">Check In</label>
            <input type="text" class="form-control" name="check_in" id="check_in" value="{{ $data->check_in }}">
          </div>
          <div class="mb-3">
            <label for="check_out" class="form-label">Check Out</label>
            <input type="text" class="form-control" name="check_out" id="check_out" value="{{ $data->check_out }}">
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            {{-- <textarea class="form-control" id="alamat" name="alamat" rows="3" value="{{ $data->alamat }}"></textarea> --}}
            <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="emailHelp" value="{{ $data->alamat }}">
          </div>
          <div class="mb-3">
            <label for="no_telepon" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" name="no_telepon" id="no_telepon" aria-describedby="emailHelp" value="{{ $data->no_telepon }}">
          </div>
          <div class="mb-3">
            <label for="kontenAkomodasi" class="form-label">Deskripsi</label>
            {{-- <textarea class="form-control" id="kontenAkomodasi" name="kontenAkomodasi" rows="3" value="{{ $data->kontenAkomodasi }}"></textarea> --}}
            <input type="text" class="form-control" name="kontenAkomodasi" id="kontenAkomodasi" aria-describedby="emailHelp" value="{{ $data->kontenAkomodasi }}">
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