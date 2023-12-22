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
        ]);
    }
}
