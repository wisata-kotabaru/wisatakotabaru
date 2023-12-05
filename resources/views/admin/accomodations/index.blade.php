@extends('layouts.admin')

@section('content')
    <h1 class="text-center mb-4">Data Akomodasi</h1>

    <div class="container-fluid">
     <a href="{{ route('tambahAkomodasi') }}" class="btn btn-success">Tambah +</a>
      @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
          {{ $message }}
        </div>
      @endif
     <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Lokasi</th>
          <th scope="col">Foto</th>
          <th scope="col">Dibuat</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
          $no = 1;
        @endphp
       @foreach ($data as $row)
       <tr>
         <th scope="row">{{ $no++ }}</th>
         <td>{{ $row->title }}</td>
         <td>{{ $row->lokasi }}</td>
         <td>
          <img src="{{ asset($row->foto) }}" alt="foto" width="50px">
          {{-- {{ $row->foto }} --}}
         </td>
         <td>{{ $row->created_at }}</td>
         <td>
           <a href="{{ route('tampilAkomodasi', ['id' => $row->id]) }}" class="btn btn-info">Edit</a>
           <a href="{{ route('delete', ['id' => $row->id]) }}" class="btn btn-danger">Delete</a>
         </td>
       </tr>        
       @endforeach
      </tbody>
    </table>
   </div>
    </div>

@endsection

@section('footer')