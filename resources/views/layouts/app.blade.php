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
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />

    {{-- Scripts --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src='https://unpkg.com/leaflet@1.8.0/dist/leaflet.js' crossorigin=''></script>


     @livewireStyles
  </head>
  <body>
  {{-- <livewire:MapLocation />  --}}

  <nav class="navbar navbar-expand-lg fixed-top bg-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('homepage') }}">
       <img src="{{ asset('frontend/img/wonderlandKotabaru.png') }}" alt="Bootstrap" width="130" height="66" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          @if (Route::has('destinasi'))
          <li class="nav-item">
            <a class="nav-link fw-bold text-uppercase @if(Route::currentRouteName() == 'destinasi') active @endif" href="{{ route('destinasi') }}">{{ __('Destinasi') }}</a>
          </li>            
          @endif
          @if (Route::has('akomodasi'))
          <li class="nav-item">
            <a class="nav-link fw-bold text-uppercase @if(Route::currentRouteName() == 'akomodasi') active @endif" href="{{ route('akomodasi') }}">{{ __('Akomodasi') }}</a>
          </li>            
          @endif
          @if (Route::has('kuliner'))
          <li class="nav-item">
            <a class="nav-link fw-bold text-uppercase @if(Route::currentRouteName() == 'kuliner') active @endif" href="{{ route('kuliner') }}">{{ __('Kuliner') }}</a>
          </li>            
          @endif
          @if (Route::has('acara'))
          <li class="nav-item">
            <a class="nav-link fw-bold text-uppercase @if(Route::currentRouteName() == 'acara') active @endif" href="{{ route('acara') }}">{{ __('Acara') }}</a>
          </li>            
          @endif
          @if (Route::has('index'))
          <li class="nav-item">
            <a class="nav-link fw-bold text-uppercase @if(Route::currentRouteName() == 'index') active @endif" href="{{ route('index') }}">{{ __('Peta Digital') }}</a>
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
    {{ isset($slot) ? $slot : null }}
  </main>

  <main class="bg-warning">
    @yield('footer')

    <div class="container">
      <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 py-5 my-5 border-top d-flex justify-content-center">
        <div class="col mb-3">
          <img src="{{ asset('frontend/img/tagline.png') }}" alt="" width="120" height="56" class="img-fluid mb-3">
          <img src="{{ asset('frontend/img/wonderlandKotabaru.png') }}" alt="" width="130" height="66" class="img-fluid">
          {{-- <p class="text-muted">© 2021</p> --}}
        </div>
    
        <div class="col mb-3">
    
        </div>
    
        <div class="col mb-3">
          <h5>Hubungi Kami</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Jl. Suryagandamana No.71, 
              Kotabaru Tengah, 
              Kec. Pulau Laut Utara, 
              Kab. Kotabaru, 
              Kalimantan Selatan 72111</a></li>

            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">disparpora@kotabaru.go.id</a></li>
          </ul>
        </div>
    
        <div class="col mb-3">
          <h5>Legal</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Syarat & Ketentuan</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Privacy Policy</a></li>
          </ul>
        </div>
    
        <div class="col mb-3">
          <form>
            <h5>Buletin</h5>
            {{-- <p>Monthly digest of what's new and exciting from us.</p> --}}
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control mb-2" placeholder="Email address">
            </div>
            <button class="btn btn-dark form-control" type="button">Subscribe</button>
          </form>
        </div>

        
      </footer>

      
    </div>
  </main>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
  @livewireScripts
  @stack('scripts')
  {{-- @stack('scripts1') --}}
  <script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>
</body>
</html>