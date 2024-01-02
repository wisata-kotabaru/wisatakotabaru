@extends('layouts.admin')

@section('content')
    <h1 class="text-center mb-4">Tambah Data Map</h1>


    <div class="container-fluid">
     <div class="row justify-content-center">
      <div class="col-8">
       <div class="card">
        <div class="card-body">
         <form action="{{ route('insertMap') }}" method="POST" enctype="multipart/form-data">
         <form action="#" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="latitude" class="form-label">Latitude</label>
            <input type="text" class="form-control" name="latitude" id="latitude" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="longitude" class="form-label">longitude</label>
            <input type="text" class="form-control" name="longitude" id="longitude" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="foto" class="form-label">Tambahkan Foto</label>
            <input type="file" class="form-control" name="foto" id="foto" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="google_maps_link" class="form-label">Google Maps Link</label>
            <input type="text" class="form-control" name="google_maps_link" id="google_maps_link" aria-describedby="emailHelp">
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