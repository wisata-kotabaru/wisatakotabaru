@extends('layouts.app')

@section('content')
<div class="carousel-inner">
 <div class="carousel-item active">
   <img src="{{ \Storage::url($data->foto) }}" class="d-block w-100 custom-card-img" alt="...">
  </div>
</div>

<div class="card container mt-5">
  <div class="card-header">
    <h1 class="text-center mt-5">{{ $data->title }}</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="{{ route('homepage') }}" class="link-dark">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('akomodasi') }}" class="link-dark">Akomodasi</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $data->title }}</li>
      </ol>
    </nav>
  </div>

  <div class="card-body">
    <img src="{{ \Storage::url($data->foto) }}" class="card-img-top" alt="...">
  </div>

  <div class="card-header">
    <p>{{ $data->kontenAkomodasi }}</p>
  </div>
</div>


@endsection

@section('footer')