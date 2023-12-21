<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destinations')->insert([
            'title' => 'Pulau Birah-Birahan',
            'lokasi' => 'Pulau Laut Kepulauan',
            'foto' => 'public/fotoDestinasi/birahBirahan.png',
            'kontenDestinasi' => 'Pulau Birah-birahan membuat pengunjung berdecak kagum karena memiliki bentuk memanjang dan berkelok, hal tersebut membuat keindahannya tercipta sempurna walaupun pulaunya tak begitu luas. Perlu diketahui, pulau tersebut memiliki tiga zona, yaitu terumbu karang, pantai tebing batu, dan pantai Ganggang. Ke 3 zona tersebut harus dipatuhi pengunjung saat melakukan kegiatan air, tujuannya agar aman dan tidak ada bahaya yang ditimbulkan. Untuk zona Terumbu Karang digunakan untuk snorkelling dan berenang, sementara zona Ganggang digunakan untuk spot memancng. Dijamin kegiatan memancing seru dan membuat hati berdebar karena penasaran seperti apakah hasil tangkapan ikannya. Usahakan memancing dengan fokus dan tidak terlalu mengambil hati karena suasana memancing di tempat pemancingan berbeda dengan suasana memancing di alam bebas. Pasalnya ikan-ikannya dapat berenang bebas jika di alam bebas.',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
        ]);

        DB::table('destinations')->insert([
            'title' => 'Pulau Samber Gelap',
            'lokasi' => 'Pulau Sebuku',
            'foto' => 'public/fotoDestinasi/pulauSamberGelap.png',
            'kontenDestinasi' => 'Sejatinya, Pulau Samber Gelap terletak di sebelah selatan Pulau Laut sehingga pengunjung harus menggunakan speedboat untuk menjangkaunya. Sementara jarak tempuhnya sekitar dua jam, walaupun termasuk pulau yang kecil namun memiliki daya tarik tersendiri sehingga menjadikannya hits di kalangan masyarakat. Pasir putih dan launya yang dangkal membuat wisatawan ingin berlama-lama berenang di pulau tersebut. Apalagi terdapat mercusuar sekaligus gardu pandang yang membuat pulau tampak unik namun berkelas. Pastinya banyak aktifitas air yang harus dicoba, misalnya snorkelling dan diving yang menarik karena pulau Samber Gelap memiliki kekayaan biota laut. Pastinya masih terlindungi sehingga pengunjung dapat mengetahui bahwa alam bawah laut sangat indah untuk dilestarikan.',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
        ]);

        DB::table('destinations')->insert([
            'title' => 'Air Terjun Tumpang Dua',
            'lokasi' => 'Kab. Kotabaru',
            'foto' => 'public/fotoDestinasi/tumpangDua.png',
            'kontenDestinasi' => 'Objek wisata air terjun tumpang dua terbilang unik dan membuat pengunjung penasaran karena airnya tidak jatuh ke bawah. Menjadi objek wisata terhits, apalagi banyak wahana yang disediakan sehingga pengunjung betah berlama-lama mengeksplor. Untuk itulah mengajak sanak saudara adalah pilihan tepat sehingga banyak moment berharga yang tercipta, tentunya diabadikan pada smartphone untuk kenang-kenangan. Selain itu sediakan perbekalan yang lengkap agar kegiatan liburan tidak terkendala, jangan sampai Anda lupa membawa pakaian anak yang lengkap dan camilan kesukaannya. Pasalnya anak-anak lebih cepat bosan ketimbang orang dewasa, terutama jika apa yang diinginkannya tidak lengkap. Jika buah hati cewek, pastikan membawa mainan termasuk boneka. Namun jika laki-laki bawalah mainan anak laki-laki. Harga Tiket: 3.000; Map: Cek Lokasi Alamat: Kec. Pulau Laut Utara, Kab. Kotabaru, Kalimantan Selatan. Mengunjungi objek wisata di Kotabaru memang tak ada habisnya karena banyak objek wisata terbaru dan terhits yang harus dikunjungi. Namun ke 10 rekomendasi diatas dapat dijadikan pilihan liburan bersama keluarga atau rekan kerja, dijamin liburan menyenangkan dan wawasan semakin luas karena setiap tempat wisata memiliki edukasi yang berbeda. jangan sampai lupa meluangkan waktu ke pusat oleh-oleh kotabaru ya, tujuannya membeli oleh-oleh untuk orang tercinta di rumah sehingga mereka turut senang.',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
        ]);

        DB::table('destinations')->insert([
            'title' => 'Taman Siring Laut',
            'lokasi' => 'Kab. Kotabaru',
            'foto' => 'public/fotoDestinasi/siringLaut.png',
            'kontenDestinasi' => 'Taman Siring Laut merupakan salah satu destinasi wisata yang wajib kamu kunjungi apabila sedang berkunjung ke Kotabaru. Lokasinya tidak jauh dari Kantor Bupati Kotabaru, sehingga mudah untuk kamu temui. Taman Siring Laut memiliki lapangan yang luas dengan ikon dua ikan todak kembar. Di tempat ini, kamu dapat bersantai menikmati indahnya pemandangan di sini hingga menikmati kuliner yang tersedia di sekitar Taman Siring Laut.',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
        ]);

        DB::table('destinations')->insert([
            'title' => 'Bukit Mamake SJA HILL',
            'lokasi' => 'Kab. Kotabaru',
            'foto' => 'public/fotoDestinasi/mamake.png',
            'kontenDestinasi' => 'Bukit Mamake merupakan objek wisata yang sering dikunjungi dan memiliki panorama yang indah dengan dikelilingi pantai dan laut di Kotabaru. Bukit Mamake berlokasi di antara dua desa yaitu Sarang Tiung dan Tirawan Kecamatan Pulau Laut Sigam Kabupaten Kotabaru. Waktu perjalanan menuju Bukit Mamake dari pusat perkotaan hanya sekitar 30 menit saja sampai puncak. Sebelumnya Bukit Mamake pernah dijadikan tempat ekshibisi olahraga paralayang dan gantole karena lokasinya yang dianggap sangat mendukung.',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
        ]);

    }
}
