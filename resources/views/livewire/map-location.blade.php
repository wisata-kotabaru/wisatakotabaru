@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class='row' style='margin-top: 90px;'>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Mapbox
                </div>
                <div class="card-body">
                    <div wire:ignore id='map' style='width: 100%; height: 75vh;'></div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Form
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="locationSelect">Pilih Lokasi:</label>
                        <select wire:model="location" id="locationSelect" class="form-control">
                            <option value="">Pilih Lokasi</option>
                            @foreach($locations as $location)
                                <option value="{{ $location['id'] }}">{{ $location['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

@push('scripts')
<script>
    const locations = @json($locations);

    mapboxgl.accessToken = '{{ env("MAPBOX_KEY") }}';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/satellite-v9',
        zoom: 5
    });

    locations.forEach(location => {
        const marker = new mapboxgl.Marker({
            color: 'red',
        })
            .setLngLat([location.longitude, location.latitude])
            .addTo(map);
    });

    document.querySelector('#locationSelect').addEventListener('change', (event) => {
        if (event.target.value) {
            map.setCenter([locations.find(loc => loc.id == event.target.value).longitude, locations.find(loc => loc.id == event.target.value).latitude], 11);
        }
    });
</script>
@endpush
