<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccommodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('accommodations')->insert([
            'title' => 'Hotel Grand Surya Kotabaru',
            'lokasi' => 'Kab. Kotabaru, Kalimantan Selatan',
            'foto' => 'random',
        ]);
    }
}
