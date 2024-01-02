@extends('layouts.admin')

@section('content')
    <h1 class="text-center mb-4">Data Map</h1>

    <div class="container-fluid">
     <a href="{{ route('tambahMap') }}" class="btn btn-success">Tambah +</a>
      @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
          {{ $message }}
        </div>
      @endif
     <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Latitude</th>
          <th scope="col">Longitude</th>
          <th scope="col">Gambar</th>
          <th scope="col">Google Maps Link</th>
          {{-- <th scope="col">Dibuat</th> --}}
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
          $no = 1;
        @endphp
       @foreach ($markers as $row)
       <tr>
         <th scope="row">{{ $no++ }}</th>
         <td>{{ $row->name }}</td>
         <td>{{ $row->latitude }}</td>
         <td>{{ $row->longitude }}</td>
         <td>
          <img src="{{ \Storage::url($row->foto) }}" alt="foto" width="50px">
         </td>
         <td>{{ $row->google_maps_link }}</td>
         {{-- <td>{{ $row->created_at }}</td> --}}
         <td>
           <a href="{{ route('tampilMap', ['id' => $row->id]) }}" class="btn btn-info">Edit</a>
           <a href="{{ route('deleteMap', ['id' => $row->id]) }}" class="btn btn-danger">Delete</a>
         </td>
       </tr>        
       @endforeach
      </tbody>
    </table>
   </div>
    </div>

@endsection

@section('footer')