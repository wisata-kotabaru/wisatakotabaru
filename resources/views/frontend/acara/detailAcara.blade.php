@extends('layouts.app')

@section('content')
<div class="carousel-inner">
 <div class="carousel-item active">
   <img src="{{ \Storage::url($data->foto) }}" class="d-block w-100 custom-card-img" alt="...">
   <div class="carousel-caption d-none d-md-block">
    <div class="caption-content">
     <h5>First slide label</h5>
     <p>Some representative placeholder content for the first slide.</p>
    </div>
  </div>
  </div>
</div>

<div class="card container mt-5">
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

    <div class="row justify-content-center">
      <div class="col-md-3">
        <blockquote class="blockquote mb-0">
          <p>A well-known quote</p>
        </blockquote>
      </div>
      <div class="col-md-3">
        <blockquote class="blockquote mb-0">
          <p>A well-known quote</p>
        </blockquote>
      </div>
      <div class="col-md-3">
        <blockquote class="blockquote mb-0">
          <p>A well-known quote</p>
        </blockquote>
      </div>
    </div>

    <div class="d-flex" style="height: 200px;">
      <div class="hr"></div>
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