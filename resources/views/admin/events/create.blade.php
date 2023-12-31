@extends('layouts.admin')

@section('content')
    <h1 class="text-center mb-4">Tambah Data Acara</h1>


    <div class="container-fluid">
     <div class="row justify-content-center">
      <div class="col-8">
       <div class="card">
        <div class="card-body">
         <form action="{{ route('insertAcara') }}" method="POST" enctype="multipart/form-data">
         <form action="#" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control" name="lokasi" id="lokasi" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="foto" class="form-label">Tambahkan Foto</label>
            <input type="file" class="form-control" name="foto" id="foto" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="kontenAcara" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="kontenAcara" name="kontenAcara" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="tanggal_mulai" class="form-label">Tanggal Mulai Acara</label>
            <input type="date" class="form-control" name="tanggal_mulai" id="tanggal_mulai" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="tanggal_berakhir" class="form-label">Tanggal Berakhir Acara</label>
            <input type="date" class="form-control" name="tanggal_berakhir" id="tanggal_berakhir" aria-describedby="emailHelp">
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