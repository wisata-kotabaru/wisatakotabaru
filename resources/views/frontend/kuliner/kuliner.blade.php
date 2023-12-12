@extends('layouts.app')

@section('content')
 <div class="carousel-inner">
   <div class="carousel-item active">
     <img src="{{ asset('frontend/img/carrousel.png') }}" class="d-block w-100" alt="...">
     <div class="carousel-caption d-none d-md-block">
      <div class="caption-content">
       <h5>First slide label</h5>
       <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    </div>
 </div>

 <div class="card-group container py-4">
  <div class="card mx-2 shadow">
    <img src="{{ asset('frontend/img/akomodasi/hotel_akomodasi.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h6 class="card-title text-warning">13 - 01 - 2023</h6>
      <h4 class="card-title">Hotel Grand Surya Kotabaru</h4>
      <p class="card-text">Kab. Kotabaru</p>
      <a class="btn btn-dark" href="{{ route('detailKuliner') }}" role="button">SELENGKAPNYA</a>
    </div>
  </div>
  <div class="card mx-2 shadow">
    <img src="{{ asset('frontend/img/akomodasi/hotel_akomodasi.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h6 class="card-title text-warning">13 - 01 - 2023</h6>
      <h4 class="card-title">Hotel Grand Surya Kotabaru</h4>
      <p class="card-text">Kab. Kotabaru</p>
      <a class="btn btn-dark" href="{{ route('detailKuliner') }}" role="button">SELENGKAPNYA</a>
    </div>
  </div>
  <div class="card mx-2 shadow">
    <img src="{{ asset('frontend/img/akomodasi/hotel_akomodasi.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h6 class="card-title text-warning">13 - 01 - 2023</h6>
      <h4 class="card-title">Hotel Grand Surya Kotabaru</h4>
      <p class="card-text">Kab. Kotabaru</p>
      <a class="btn btn-dark" href="{{ route('detailKuliner') }}" role="button">SELENGKAPNYA</a>
    </div>
  </div>
  <div class="card mx-2 shadow">
    <img src="{{ asset('frontend/img/akomodasi/hotel_akomodasi.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h6 class="card-title text-warning">13 - 01 - 2023</h6>
      <h4 class="card-title">Hotel Grand Surya Kotabaru</h4>
      <p class="card-text">Kab. Kotabaru</p>
      <a class="btn btn-dark" href="{{ route('detailKuliner') }}" role="button">SELENGKAPNYA</a>
    </div>
  </div>
</div>
 <div class="card-group container py-4">
  <div class="card mx-2 shadow">
    <img src="{{ asset('frontend/img/akomodasi/hotel_akomodasi.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h6 class="card-title text-warning">13 - 01 - 2023</h6>
      <h4 class="card-title">Hotel Grand Surya Kotabaru</h4>
      <p class="card-text">Kab. Kotabaru</p>
      <a class="btn btn-dark" href="{{ route('detailKuliner') }}" role="button">SELENGKAPNYA</a>
    </div>
  </div>
  <div class="card mx-2 shadow">
    <img src="{{ asset('frontend/img/akomodasi/hotel_akomodasi.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h6 class="card-title text-warning">13 - 01 - 2023</h6>
      <h4 class="card-title">Hotel Grand Surya Kotabaru</h4>
      <p class="card-text">Kab. Kotabaru</p>
      <a class="btn btn-dark" href="{{ route('detailKuliner') }}" role="button">SELENGKAPNYA</a>
    </div>
  </div>
  <div class="card mx-2 shadow">
    <img src="{{ asset('frontend/img/akomodasi/hotel_akomodasi.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h6 class="card-title text-warning">13 - 01 - 2023</h6>
      <h4 class="card-title">Hotel Grand Surya Kotabaru</h4>
      <p class="card-text">Kab. Kotabaru</p>
      <a class="btn btn-dark" href="{{ route('detailKuliner') }}" role="button">SELENGKAPNYA</a>
    </div>
  </div>
  <div class="card mx-2 shadow">
    <img src="{{ asset('frontend/img/akomodasi/hotel_akomodasi.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h6 class="card-title text-warning">13 - 01 - 2023</h6>
      <h4 class="card-title">Hotel Grand Surya Kotabaru</h4>
      <p class="card-text">Kab. Kotabaru</p>
      <a class="btn btn-dark" href="{{ route('detailKuliner') }}" role="button">SELENGKAPNYA</a>
    </div>
  </div>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link link-dark" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link link-dark" href="#">1</a></li>
    <li class="page-item"><a class="page-link link-dark" href="#">2</a></li>
    <li class="page-item"><a class="page-link link-dark" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link link-dark" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>


@endsection

@section('footer')