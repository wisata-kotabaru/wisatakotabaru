@extends('layouts.app')

@section('content')
<div class="carousel-inner">
 <div class="carousel-item active">
   <img src="{{ \Storage::url($data->foto) }}" class="d-block w-100 custom-card-img" alt="...">
  </div>
</div>

<div id="top-of-cards">
  <div class="container py-3">
    <div class="card mb-3 shadow">

      <div class="card-header bg-transparent">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-1">
            <li class="breadcrumb-item"><a href="{{ route('homepage') }}" class="link-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('acara') }}" class="link-dark">Acara</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $data->title }}</li>
          </ol>
        </nav>
      </div>

      <div class="row g-0">
        
        <div class="col-md-4">
            <img src="{{ \Storage::url($data->foto) }}" class="img-fluid" alt="..." >
        </div>
        

        <div class="col-md-8">
          <div class="card-body">
              <h5 class="card-title">{{ $data->title }}</h5>
              <div class="scrollspy-container" style="max-height: 250px; overflow-y: auto;">
                  <p class="card-text">{{ $data->kontenAcara }}</p>
              </div>
              <p class="card-text"><small class="text-body-secondary">{{ $data->created_at }}</small></p>
          </div>

          <div class="card-footer bg-transparent">
            <h5 class="card-title">Tanggal Pelaksanaan</h5>
            <p class="card-text">Tanggal Mulai : <span class="text-warning fw-bold">{{ $data->tanggal_mulai }}</span></p>
            <p class="card-text">Tanggal Berakhir : <span class="text-warning fw-bold">{{ $data->tanggal_berakhir }}</span></p>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>


@endsection

@section('footer')