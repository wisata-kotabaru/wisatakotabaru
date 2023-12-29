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
            'title' => 'Hotel Grand Surya',
            'lokasi' => 'Kab. Kotabaru',
            'foto' => 'public/fotoAkomodasi/grandSurya.png',
            'kontenAkomodasi' => 'Jika Anda memiliki agenda kegiatan yang membutuhkan ruangan besar, maka Grand Surya Hotel Kotabaru adalah pilihan yang tepat. Hotel ini memiliki ruang pertemuan yang luas dan dilengkapi dengan berbagai fasilitas penunjang. Grand Surya Hotel Kotabaru memiliki segala fasilitas penunjang bisnis untuk Anda dan kolega. Grand Surya Hotel Kotabaru adalah pilihan cerdas bagi Anda yang ingin menginap di hotel dengan harga terjangkau, namun tetap memberikan pelayanan yang baik. Resepsionis siap 24 jam untuk melayani proses check-in, check-out dan kebutuhan Anda yang lain. Jangan ragu untuk menghubungi resepsionis, kami siap melayani Anda. Terdapat restoran yang menyajikan menu lezat ala Grand Surya Hotel Kotabaru khusus untuk Anda. WiFi tersedia di seluruh area publik properti untuk membantu Anda tetap terhubung dengan keluarga dan teman. Grand Surya Hotel Kotabaru adalah akomodasi dengan fasilitas baik dan kualitas pelayanan memuaskan menurut sebagian besar tamu. Pelayanan yang baik dengan harga terjangkau akan membuat Anda merasa nyaman menginap di Grand Surya Hotel Kotabaru.',
            'check_in' => '14.00',
            'check_out' => '',
            'alamat' => 'Jl. Suryagandamana No.10, Dirgahayu, Kec. Pulau Laut Utara, Kab. Kotabaru, Kalimantan Selatan 72111',
            'no_telepon' => '0822-7272-5100',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
            'external_link' => 'https://www.traveloka.com/en-id/hotel/detail?spec=30-12-2023.31-12-2023.1.1.HOTEL.3000010009709.Grand%20Surya%20Hotel%20Kotabaru.1',
        ]);

        DB::table('accommodations')->insert([
            'title' => 'Hotel Kartika',
            'lokasi' => 'Kab. Kotabaru',
            'foto' => 'public/fotoAkomodasi/hotelKartika.png',
            'kontenAkomodasi' => 'Hotel Kartika Kotabaru adalah hotel bintang dua yang terletak di Jalan Veteran No. 2, Dirgahayu, Pulau Laut Utara. Hotel ini terletak di pinggir jalan raya, sehingga sangat mudah bagi Anda untuk menemukan hotel ini. Selain itu, Hotel Kartika Kotabaru juga dekat dengan tempat wisata menarik di Kotabaru yaitu Siring Kotabaru. Jika Anda ingin mencari makan, berbagai tempat makan favorit dapat ditemukan dengan mudah di sekitar hotel, diantaranya: - Depot Tahu Tek Bamega - Kebab Turki Baba Rafi Kotabaru - RM Barokah - Loiythaitea kartika - Ayam Goreng Mega - Es Teh Indonesia',
            'check_in' => '11.00',
            'check_out' => '14.00',
            'alamat' => 'Jl. Veteran No.2, Dirgahayu, Kec. Pulau Laut Utara, Kab. Kotabaru, Kalimantan Selatan 72116',
            'no_telepon' => '0821-5302-4206',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
            'external_link' => 'https://www.google.com/travel/search?q=hotel%20yang%20berada%20di%20kotabaru&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4284970%2C4291517%2C4597339%2C4814050%2C4874190%2C4893075%2C4924070%2C4963888%2C4965990%2C10208620%2C10208629%2C72277293%2C72298667%2C72302247%2C72313836%2C72317059%2C72378192%2C72406588%2C72408739%2C72412680%2C72414906%2C72421566%2C72430562%2C72440516%2C72442338%2C72445425%2C72449502%2C72458707&hl=id-ID&gl=id&cs=1&ssta=1&ts=CAESCgoCCAMKAggDEAAaWwo9EjsyJTB4MmRlOGI4MGQ1OTQ3Y2YyYjoweGIzODMwNGU1YmY0Mzk5ZmU6EkthYnVwYXRlbiBLb3RhYmFydRIaEhQKBwjoDxABGAESBwjoDxABGAIYATICEAAqBwoFOgNJRFI&qs=CAEyKENob0lxLVd3eGJMbXdvZnNBUm9OTDJjdk1URmlObVJ1WDI1eWNCQUI4BkIJCVK-XNkRn7TbQgkJqzKsKDMLD-xCCQl_f9EsAuKGXg&ap=MABoAQ&ictx=1&sa=X&ved=0CAAQ5JsGahcKEwj4r_GOprODAxUAAAAAHQAAAAAQaQ'
        ]);

        DB::table('accommodations')->insert([
            'title' => 'Hotel Graha Mandiri',
            'lokasi' => 'Kab. Kotabaru',
            'foto' => 'public/fotoAkomodasi/grahaMandiri.png',
            'kontenAkomodasi' => 'Tentang hotel ini Waktu check in: 12.00 Waktu check out: 12.00 Alamat & informasi kontak Jl. Singabana No.37, Kotabaru Tengah, Kec. Pulau Laut Utara, Kab. Kotabaru, Kalimantan Selatan 72113 - 0815-2020-999',
            'check_in' => '12.00',
            'check_out' => '12.00',
            'alamat' => 'Jl. Singabana No.37, Kotabaru Tengah, Kec. Pulau Laut Utara, Kab. Kotabaru, Kalimantan Selatan 72113',
            'no_telepon' => '0815-2020-999',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
            'external_link' => 'https://www.google.com/travel/search?q=hotel%20yang%20berada%20di%20kotabaru&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4284970%2C4291517%2C4597339%2C4814050%2C4874190%2C4893075%2C4924070%2C4963888%2C4965990%2C10208620%2C10208629%2C72277293%2C72298667%2C72302247%2C72313836%2C72317059%2C72378192%2C72406588%2C72408739%2C72412680%2C72414906%2C72421566%2C72430562%2C72440516%2C72442338%2C72445425%2C72449502%2C72458707&hl=id-ID&gl=id&cs=1&ssta=1&ts=CAESCgoCCAMKAggDEAAaXQo9EjsyJTB4MmRlOGI4MGQ1OTQ3Y2YyYjoweGIzODMwNGU1YmY0Mzk5ZmU6EkthYnVwYXRlbiBLb3RhYmFydRIcEhQKBwjoDxABGAESBwjoDxABGAIYATIECAAQACoHCgU6A0lEUg&qs=CAEyJ0Noa0l4T242cTVDMnpxUS1HZzB2Wnk4eE1XTTBNemx4Tlc1eUVBRTgGQgkJUr5c2RGftNtCCQmrMqwoMwsP7EIJCX9_0SwC4oZeSAA&ap=MABoAQ&ictx=1&sa=X&ved=0CAAQ5JsGahgKEwj4r_GOprODAxUAAAAAHQAAAAAQmAE'
        ]);

        DB::table('accommodations')->insert([
            'title' => 'Hotel Pacific',
            'lokasi' => 'Kab. Kotabaru',
            'foto' => 'public/fotoAkomodasi/pacific.png',
            'kontenAkomodasi' => 'Tentang hotel ini Alamat & informasi kontak Jl.H.hasan basri, Depan rumah sakit umum kotabaru, Semayap, Pulau Laut Utara, Semayap, Kec. Pulau Laut Utara, Kab. Kotabaru, Kalimantan Selatan 72117 (0518) 23888',
            'check_in' => '',
            'check_out' => '',
            'alamat' => 'Jl.H.hasan basri, Depan rumah sakit umum kotabaru, Semayap, Pulau Laut Utara, Semayap, Kec. Pulau Laut Utara, Kab. Kotabaru, Kalimantan Selatan 72117',
            'no_telepon' => '(0518) 23888',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
            'external_link' => 'https://www.google.com/travel/search?q=hotel%20yang%20berada%20di%20kotabaru&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4284970%2C4291517%2C4597339%2C4814050%2C4874190%2C4893075%2C4924070%2C4963888%2C4965990%2C10208620%2C10208629%2C72277293%2C72298667%2C72302247%2C72313836%2C72317059%2C72378192%2C72406588%2C72408739%2C72412680%2C72414906%2C72421566%2C72430562%2C72440516%2C72442338%2C72445425%2C72449502%2C72458707&hl=id-ID&gl=id&cs=1&ssta=1&ts=CAESCgoCCAMKAggDEAAaXQo9EjsyJTB4MmRlOGI4MGQ1OTQ3Y2YyYjoweGIzODMwNGU1YmY0Mzk5ZmU6EkthYnVwYXRlbiBLb3RhYmFydRIcEhQKBwjoDxABGAESBwjoDxABGAIYATIECAAQACoHCgU6A0lEUg&qs=CAEyKENob0kwdl9TdkluaWhiQ0NBUm9OTDJjdk1URmlkM0JzTURNMGJoQUI4BkIJCVK-XNkRn7TbQgkJqzKsKDMLD-xCCQl_f9EsAuKGXkgA&ap=MABoAQ&ictx=1&sa=X&ved=0CAAQ5JsGahgKEwj4r_GOprODAxUAAAAAHQAAAAAQsAE'
        ]);

        DB::table('accommodations')->insert([
            'title' => 'Hotel Mandiri',
            'lokasi' => 'Kab. Kotabaru',
            'foto' => 'public/fotoAkomodasi/mandiri.png',
            'kontenAkomodasi' => 'Tentang hotel ini Waktu check in: 07.00 Waktu check out: 12.00 Alamat & informasi kontak Jl. Suryagandamana No.16, RT.01, Kotabaru Hulu, Kec. Pulau Laut Utara, Kab. Kotabaru, Kalimantan Selatan 72114 (0518) 23699',
            'check_in' => '07.00',
            'check_out' => '12.00',
            'alamat' => 'Jl. Suryagandamana No.16, RT.01, Kotabaru Hulu, Kec. Pulau Laut Utara, Kab. Kotabaru, Kalimantan Selatan 72114',
            'no_telepon' => '(0518) 23699',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
            'external_link' => 'https://www.google.com/travel/search?q=hotel%20yang%20berada%20di%20kotabaru&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4284970%2C4291517%2C4597339%2C4814050%2C4874190%2C4893075%2C4924070%2C4963888%2C4965990%2C10208620%2C10208629%2C72277293%2C72298667%2C72302247%2C72313836%2C72317059%2C72378192%2C72406588%2C72408739%2C72412680%2C72414906%2C72421566%2C72430562%2C72440516%2C72442338%2C72445425%2C72449502%2C72458707&hl=id-ID&gl=id&cs=1&ssta=1&ts=CAESCgoCCAMKAggDEAAaXQo9EjsyJTB4MmRlOGI4MGQ1OTQ3Y2YyYjoweGIzODMwNGU1YmY0Mzk5ZmU6EkthYnVwYXRlbiBLb3RhYmFydRIcEhQKBwjoDxABGAESBwjoDxABGAIYATIECAAQACoHCgU6A0lEUg&qs=CAEyJ0Noa0loOWptejViU3I0NUhHZzB2Wnk4eE1XSTJaREZ6ZW1ONkVBRTgGQgkJUr5c2RGftNtCCQmrMqwoMwsP7EIJCX9_0SwC4oZeSAA&ap=MABoAQ&ictx=1&sa=X&ved=0CAAQ5JsGahgKEwj4r_GOprODAxUAAAAAHQAAAAAQxwE'
        ]);
    }
}
