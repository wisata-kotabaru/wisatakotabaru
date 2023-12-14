@extends('layouts.app')

@section('content')
<div class="carousel-inner">
 <div class="carousel-item active">
   <img src="{{ \Storage::url($data->foto) }}" class="d-block w-100 custom-card-img" alt="...">
  </div>
</div>

<div class="container">
  <div class="card-group mt-5">

    <div class="card mx-2 rounded">
      <div class="card-header">
        <h1 class="text-center mt-5">{{ $data->title }}</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="{{ route('homepage') }}" class="link-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('acara') }}" class="link-dark">Acara</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $data->title }}</li>
          </ol>
        </nav>
      </div>

      <div class="card-body">
        <img src="{{ \Storage::url($data->foto) }}" class="card-img-top rounded" alt="...">
      </div>

      <div class="card-header">
        <p>{{ $data->kontenAcara }}</p>
      </div>

    </div>

    <div class="card mx-2 rounded">
      <div class="card-header">
        <h3 class="mt-5">Event Berlangsung</h3>
      </div>

      <div class="card-body">
        <h4>Mulai    : <span class="text-warning">{{ $data->tanggal_mulai }}</span></h4>
        <h4>Berakhir : <span class="text-warning">{{ $data->tanggal_berakhir }}</span></h4>
      </div>
      

    </div>

  </div>
</div>



@endsection

@section('footer')