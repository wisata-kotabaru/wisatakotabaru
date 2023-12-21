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

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Longtitude</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Lattitude</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
    
@endsection
@push('scripts')
<script>

        const defaultLocation = [116.22821158372666, -3.235331354898247]

        mapboxgl.accessToken = '{{ env("MAPBOX_KEY") }}';
        var map = new mapboxgl.Map({
            container: 'map',
            center: defaultLocation,
            zoom: 11.15
        });

        const style = "satellite-v9"
        // light-v10, outdoors-v11, satellite-v9, streets-v11, dark-v10
        map.setStyle(`mapbox://styles/mapbox/${style}`)

        map.addControl(new mapboxgl.NavigationControl())

        map.on('click', (e) => {
            const longtitude = e.lngLat.lng
            const lattitude = e.lngLat.lat

            console.log({longtitude, lattitude});
        })

    
    
</script>
@endpush


