@extends('layouts.app')

@section('content')
<div class="carousel-inner">
 <div class="carousel-item active">
   <img src="{{ \Storage::url($data->foto) }}" class="d-block w-100 custom-img" alt="...">
  </div>
</div>

<div id="top-of-cards">
  <div class="container py-3">
    <div class="card mb-3 shadow">

      <div class="card-header bg-transparent">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-1">
            <li class="breadcrumb-item"><a href="{{ route('homepage') }}" class="link-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('akomodasi') }}" class="link-dark">Akomodasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $data->title }}</li>
          </ol>
        </nav>
      </div>

      <div class="row g-3">
        
        <div class="col-md-4">
          <div class="image-container rounded" style="position: relative; overflow: hidden; height: 0; padding-top: 75%;">
            <img src="{{ \Storage::url($data->foto) }}" class="img-fluid" alt="..." style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
          </div>
        </div>
        
        <div class="col-md-4">
          <h5>Tentang Hotel Ini</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Waktu check in : 11.00 </a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Waktu check in : 11.00 </a></li>
          </ul>
        </div>
        
        <div class="col-md-4">
          <h5>Alamat & Informasi Kontak</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Jl. Veteran No.2, Dirgahayu, Kec. Pulau Laut Utara, Kab. Kotabaru, Kalimantan Selatan 72116</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">0821-5302-4206</a></li>
          </ul>
        </div>

      </div>

      <div class="card-body">
        <h5 class="card-title">{{ $data->title }}</h5>
        <div class="scrollspy-container" style="max-height: 200px; overflow-y: auto;">
            <p class="card-text">{{ $data->kontenAkomodasi }}</p>
        </div>
        <p class="card-text"><small class="text-body-secondary">{{ $data->created_at }}</small></p>
      </div>

    </div>
  </div>

    
</div>

@endsection

@section('footer')