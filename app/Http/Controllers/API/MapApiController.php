<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;

class MapApiController extends Controller
{
    public function getMarkers()
    {
        $places = Place::all();

        $markers = [];
        foreach ($places as $place) {
            $markers[] = [
                'position' => [
                    'lat' => $place->latitude,
                    'lng' => $place->longitude,
                ],
                'draggable' => true, // Sesuaikan sesuai kebutuhan
                'name' => $place->name,
                'foto' => asset($place->foto), // Menggunakan asset() untuk membuat URL gambar
                'google_maps_link' => $place->google_maps_link,
            ];
        }

        return response()->json(['markers' => $markers]);
    }
}
