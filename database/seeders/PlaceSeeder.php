<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('places')->insert([
            [
                'name' => 'Siring Laut Kotabaru',
                'latitude' => -3.235716711628009, 
                'longitude' => 116.22784568356414,
                'foto' => 'public/fotoLokasi/siringLaut.png',
                'google_maps_link' => 'https://maps.app.goo.gl/fFCNTH5dFo84K45q7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more places as needed
        ]);
    }
}
