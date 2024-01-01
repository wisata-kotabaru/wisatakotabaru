<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $places = Place::all();

        $markers = $places->map(function ($place) {
            return [
                'position' => [
                    'lat' => $place->latitude,
                    'lng' => $place->longitude,
                ],
                'draggable' => true,
                'name' => $place->name,
                'foto' => $place->foto,
                'google_maps_link' => $place->google_maps_link,
            ];
        });

        return view('frontend.map', compact('markers'));
    }
}
