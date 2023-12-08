<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('frontend/img/tagline.png') }}" type="image/x-icon">
    <title>Wisata Kotabaru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>

   <nav class="navbar navbar-expand-lg fixed-top bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
       <img src="{{ asset('frontend/img/wonderlandKotabaru.png') }}" alt="Bootstrap" width="120" height="56" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          @if (Route::has('destinasi'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('destinasi') }}">{{ __('Destinasi') }}</a>
          </li>            
          @endif
          @if (Route::has('akomodasi'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('akomodasi') }}">{{ __('Akomodasi') }}</a>
          </li>            
          @endif
          @if (Route::has('kuliner'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('kuliner') }}">{{ __('Kuliner') }}</a>
          </li>            
          @endif
          @if (Route::has('acara'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('acara') }}">{{ __('Acara') }}</a>
          </li>            
          @endif
          @if (Route::has('panduan'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('panduan') }}">{{ __('Panduan') }}</a>
          </li>            
          @endif
          @if (Route::has('rencanakanPerjalanan'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('rencanakanPerjalanan') }}">{{ __('Referensi Perjalanan') }}</a>
          </li>            
          @endif
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  
  <main class="">
    @yield('content')
  </main>

  <main class="bg-warning">
    @yield('footer')

    <div class="container">
      <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 py-5 my-5 border-top">
        <div class="col mb-3">
          <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          </a>
          <p class="text-muted">© 2021</p>
        </div>
    
        <div class="col mb-3">
    
        </div>
    
        <div class="col mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>
    
        <div class="col mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>
    
        <div class="col mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>
      </footer>
    </div>
  </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>