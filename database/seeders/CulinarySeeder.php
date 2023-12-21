<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CulinarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('culinaries')->insert([
            'title' => 'Sagon Bakar',
            'lokasi' => 'Kab. Kotabaru',
            'foto' => 'public/fotoKuliner/sagonBakar.png',
            'kontenKuliner' => 'Selain kaya akan hasil lautnya, di Kotabaru juga banyak tumbuh pohon kelapa. Oleh masyarakat setempat, kelapa dijadikan sebagai olahan khas yang lezat, yaitu sagon bakar. Camilan ini terbuat dari kelapa yang masih muda, tepung kanji, telur, dan gula. Kemudian semua bahan tersebut dicampur hingga menjadi adonan. Setelah itu, adonan dimasak dengan cara dipanggang hingga menjadi kering.',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
        ]);

        DB::table('culinaries')->insert([
            'title' => 'Jepa Ubi Kayu',
            'lokasi' => 'Kab. Kotabaru',
            'foto' => 'public/fotoKuliner/jepaUbiKayu.png',
            'kontenKuliner' => 'Jika diperhatikan dengan seksama, tampilan jepa ubi kayu hampir sama dengan sagon bakar tetapi bentuknya lebih lebar dan pipih dan teksturnya lembut. Hidangan ini terbuat dari ubi kayu atau singkong dan parutan kelapa. Jepa ubi kayu bisa dimakan langsung sebagai camilan dengan cara dicocol ke gula merah atau dijadikan sebagai menu pengganti nasi.',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
        ]);

        DB::table('culinaries')->insert([
            'title' => 'Kerupuk Udang',
            'lokasi' => 'Kab. Kotabaru',
            'foto' => 'public/fotoKuliner/kerupukUdang.png',
            'kontenKuliner' => 'Bagi masyarakat Indonesia, kerupuk merupakan kudapan pelengkap yang bisa meningkatkan cita rasa hidangan utama. Setiap daerah biasanya memiliki jenis kerupuk khasnya masing-masing. Tak mau kalah, Kota Kotabaru di Kalimantan Selatan juga terkenal dengan kerupuk udangnya. Seperti namanya, bahan dasar kerupuk ini berasal dari udang yang dicampur dengan tepung, telur, bawang putih, dan garam. Kerupuk udang khas Kotabaru memiliki cita rasa yang lebih gurih dan tekstur yang lebih renyah. Dapat dijadikan sebagai salah satu alternatif pilihan oleh-oleh untuk keluarga di rumah, biasanya kerupuk udang dijual dalam bentuk yang masih mentah. Meski begitu, banyak juga penjual kerupuk udang yang siap santap.',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
        ]);

        DB::table('culinaries')->insert([
            'title' => 'Rumput Laut Kering',
            'lokasi' => 'Kab. Kotabaru',
            'foto' => 'public/fotoKuliner/rumputLautKering.png',
            'kontenKuliner' => 'Hasil laut Kotabaru tak hanya terbatas di aneka olahan hewan lautnya saja. Rumput laut menjadi salah satu contohnya. Bahkan, rumput laut kering menjadi salah satu makanan khas yang populer Kota Kotabaru. Rumput laut kering ini biasanya menjadi bahan yang pangan yang ada di dalam macam-macam jajanan seperti es kelapa, es buah, es kopyor, dan lain-lain. Jangan khawatir saat memilih rumput laut kering sebagai oleh-oleh karena bahan pangan ini dapat bertahan lama dan tidak mudah busuk. Cara menggunakan rumput laut kering sebelum diolah menjadi aneka hidangan kesukaan kamu pun terbilang cukup mudah. Kamu hanya perlu merendam rumput laut dengan air matang dan bersih semalaman supaya air meresap.',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
        ]);

        DB::table('culinaries')->insert([
            'title' => 'Cumi-cumi Kering',
            'lokasi' => 'Kab. Kotabaru',
            'foto' => 'public/fotoKuliner/cumiKering.png',
            'kontenKuliner' => 'Selain rumput laut, Kota Kotabaru juga terkenal lewat olahan cumi-cumi kering. Cumi-cumi kering yang wajib dibeli sebagai oleh-oleh khas Kotabaru ini dapat diolah menjadi berbagai macam hidangan tanpa khawatir cepat busuk karena dapat bertahan lama. Wisatawan yang ingin membelinya bisa datang langsung ke perkampungan nelayan yang terletak di sekitar pantai Gedambaan Sarang Tiung. Nah, itulah kuliner khas Kotabaru yang sayang untuk dilewatkan saat berkunjung ke sana. Kalau kebetulan mampir ke kota ini, jangan lupa beli, ya!',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
        ]);
    }
}
