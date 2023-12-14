@extends('layouts.app')

@section('content')
 <div class="carousel-inner">
   <div class="carousel-item active">
     <img src="{{ asset('frontend/img/kuliner.png') }}" class="d-block w-100 custom-card-img" alt="...">
     <div class="carousel-caption d-none d-md-block">
      <div class="caption-content">
       <h1>KULINER</h1>
      </div>
    </div>
    </div>
 </div>


<div id="top-of-cards" class="card-group container py-5"> 

<div class="card-group container py-4">
  @foreach ($data as $row)
  <div class="col-md-3 mb-4">
    <div class="card mx-2 shadow rounded">
      <img src="{{ \Storage::url($row->foto) }}" class="card-img-top custom-card-img rounded" alt="...">
      <div class="card-body">
        <h6 class="card-title text-warning">{{ $row->created_at }}</h6>
        <h4 class="card-title">{{ $row->title }}</h4>
        {{-- <p class="card-text">{{ $row->lokasi }}</p> --}}
      </div>
      <a class="btn btn-dark" href="{{ route('detailKuliner', ['id' => $row->id]) }}" role="button">SELENGKAPNYA</a>
    </div>    
  </div>
  @endforeach
</div>

</div>


<div class="d-flex justify-content-center mt-4">
  <nav aria-label="Page navigation example">
    <ul class="pagination">

      {{-- Previous Page Link --}}
      @if ($data->onFirstPage())
        <li class="page-item disabled">
          <span class="page-link" aria-hidden="true">&laquo;</span>
        </li>
      @else
        <li class="page-item">
          <a class="page-link dark-theme" href="{{ $data->previousPageUrl() }}#top-of-cards" aria-label="Previous">&laquo;</a>
        </li>
      @endif

      {{-- Pagination Elements --}}
      @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
        @if ($page == $data->currentPage())
          <li class="page-item active" aria-current="page">
            <span class="page-link dark-theme">{{ $page }}</span>
          </li>
        @else
          <li class="page-item">
            <a class="page-link dark-theme" href="{{ $url }}#top-of-cards">{{ $page }}</a>
          </li>
        @endif
      @endforeach

      {{-- Next Page Link --}}
      @if ($data->hasMorePages())
        <li class="page-item">
          <a class="page-link dark-theme" href="{{ $data->nextPageUrl() }}#top-of-cards" aria-label="Next">&raquo;</a>
        </li>
      @else
        <li class="page-item disabled">
          <span class="page-link" aria-hidden="true">&raquo;</span>
        </li>
      @endif

    </ul>
  </nav>
</div>



@endsection

@section('footer')