@extends('layouts.app')

@section('content')
<div class="carousel-inner">
 <div class="carousel-item active">
   <img src="{{ asset('frontend/img/destinasi.png') }}" class="d-block w-100 custom-img" alt="...">
  </div>
</div>


<div id="top-of-cards">
  <div class="container">
    <div class="card mb-3 shadow">

      <div class="card-header bg-transparent">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-1">
            <li class="breadcrumb-item"><a href="{{ route('homepage') }}" class="link-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('destinasi') }}" class="link-dark">Destinasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $data->title }}</li>
          </ol>
        </nav>
      </div>

      <div class="row g-0">
        
        <div class="col-md-4">
          <div class="image-container" style="position: relative; overflow: hidden; height: 0; padding-top: 75%;">
            <img src="{{ \Storage::url($data->foto) }}" class="img-fluid" alt="..." style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
          </div>
        </div>
        

        <div class="col-md-8">
          <div class="card-body">
              <h5 class="card-title">{{ $data->title }}</h5>
              <div class="scrollspy-container" style="max-height: 200px; overflow-y: auto;">
                  <p class="card-text">{{ $data->kontenDestinasi }}</p>
              </div>
              <p class="card-text"><small class="text-body-secondary">{{ $data->created_at }}</small></p>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>


@endsection

@section('footer')