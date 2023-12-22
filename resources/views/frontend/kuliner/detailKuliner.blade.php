@extends('layouts.app')

@section('content')
<div class="carousel-inner">
 <div class="carousel-item active">
   <img src="{{ asset('frontend/img/kuliner.png') }}" class="d-block w-100 custom-img" alt="...">
  </div>
</div>

<div id="top-of-cards">
  <div class="container">
    <div class="card mb-3 shadow">

      <div class="card-header bg-transparent">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-1">
            <li class="breadcrumb-item"><a href="{{ route('homepage') }}" class="link-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('kuliner') }}" class="link-dark">Kuliner</a></li>
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
                  <p class="card-text">{{ $data->kontenKuliner }}</p>
              </div>
              <p class="card-text"><small class="text-body-secondary">{{ $data->created_at }}</small></p>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>

{{-- 
<div class="container border mt-5 py-4 ">

 <div class="card-header">
  <h3>List of Cards</h3>
 </div>

 <div class="card-group overflow-auto">

  <div class="card mb-3 mx-2 border" style="max-width: 540px;">
   <div class="row g-0">
     <div class="col-md-4">
       <img src="..." class="img-fluid rounded-start" alt="...">
     </div>
     <div class="col-md-8">
       <div class="card-body">
         <h5 class="card-title">Card title</h5>
         <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
         <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
       </div>
     </div>
   </div>
  </div>
  <div class="card mb-3 mx-2 border" style="max-width: 540px;">
   <div class="row g-0">
     <div class="col-md-4">
       <img src="..." class="img-fluid rounded-start" alt="...">
     </div>
     <div class="col-md-8">
       <div class="card-body">
         <h5 class="card-title">Card title</h5>
         <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
         <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
       </div>
     </div>
   </div>
  </div>
  <div class="card mb-3 mx-2 border" style="max-width: 540px;">
   <div class="row g-0">
     <div class="col-md-4">
       <img src="..." class="img-fluid rounded-start" alt="...">
     </div>
     <div class="col-md-8">
       <div class="card-body">
         <h5 class="card-title">Card title</h5>
         <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
         <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
       </div>
     </div>
   </div>
  </div>

 </div>
</div> --}}


@endsection

@section('footer')