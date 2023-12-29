<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapApiController extends Controller
{
    public function getMarkers()
    {
        $initialMarkers = [
            [
                'position' => [
                    'lat' => -3.2357488433391017,
                    'lng' => 116.22787791051167
                ],
                'draggable' => true
            ],
            [
                'position' => [
                    'lat' => -3.2931962514457176,
                    'lng' => 116.26622666898716
                ],
                'draggable' => false
            ],
            [
                'position' => [
                    'lat' => -3.243013639895132,
                    'lng' => 116.26038774349016
                ],
                'draggable' => true
            ]
        ];

        return response()->json(['markers' => $initialMarkers]);
    }
}
