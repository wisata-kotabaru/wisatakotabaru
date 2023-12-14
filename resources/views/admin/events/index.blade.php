@extends('layouts.admin')

@section('content')
    <h1 class="text-center mb-4">Data Acara</h1>

    <div class="container-fluid">
     <a href="{{ route('tambahAcara') }}" class="btn btn-success">Tambah +</a>
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
          <th scope="col">Deksripsi</th>
          <th scope="col">Acara Dimulai</th>
          <th scope="col">Acara Berakhir</th>
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
          <img src="{{ \Storage::url($row->foto) }}" alt="foto" width="50px">
         </td>
         <td>{{ $row->kontenAcara }}</td>
         <td>{{ $row->tanggal_mulai }}</td>
         <td>{{ $row->tanggal_berakhir }}</td>
         <td>{{ $row->created_at }}</td>
         <td>
           <a href="{{ route('tampilAcara', ['id' => $row->id]) }}" class="btn btn-info">Edit</a>
           <a href="{{ route('deleteAcara', ['id' => $row->id]) }}" class="btn btn-danger">Delete</a>
         </td>
       </tr>        
       @endforeach
      </tbody>
    </table>
   </div>
    </div>

@endsection

@section('footer')