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

 <div class="container mt-3">
  <div class="card text-center">
    <div class="card-body">
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <select class="form-control btn btn-dark" id="location">
              <option value="">Semua Lokasi</option>
              <option value="Jakarta">Jakarta</option>
              <option value="Bandung">Bandung</option>
              <option value="Surabaya">Surabaya</option>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <select class="form-control btn btn-dark" id="order-by">
              <option value="default">Default</option>
              <option value="harga">Harga</option>
              <option value="rating">Rating</option>
              <option value="fasilitas">Fasilitas</option>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <select class="form-control btn btn-dark" id="sort-by">
              <option value="asc">Ascending</option>
              <option value="desc">Descending</option>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <button type="submit" class="form-control btn btn-warning">Terapkan</button>
        </div>
      </div>
    </div>
  </div>
</div>


 


 <div class="card-group container py-4">
  <div class="card mx-2">
    <img src="{{ asset('frontend/img/akomodasi/hotel_akomodasi.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card mx-2">
    <img src="{{ asset('frontend/img/akomodasi/hotel_akomodasi.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card mx-2">
    <img src="{{ asset('frontend/img/akomodasi/hotel_akomodasi.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card mx-2">
    <img src="{{ asset('frontend/img/akomodasi/hotel_akomodasi.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>


@endsection

@section('footer')