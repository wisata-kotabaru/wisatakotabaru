<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locations')->insert([
            'name' => 'Lokasi 1',
            'longitude' => 116.22821158372666,
            'latitude' => -3.235331354898247,
        ]);

        DB::table('locations')->insert([
            'name' => 'Lokasi 2',
            'longitude' => 106.82793582078924,
            'latitude' => -6.189146439187672,
        ]);

        DB::table('locations')->insert([
            'name' => 'Lokasi 3',
            'longitude' => 107.61860904616966,
            'latitude' => -6.91725776044724,
        ]);
    }
}
