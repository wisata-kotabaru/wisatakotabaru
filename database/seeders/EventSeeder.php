<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            'title' => 'MP2AF Festival',
            'lokasi' => 'Ekowisata Hutan Meranti',
            'foto' => 'public/fotoAcara/mp2af.png',
            'kontenAcara' => 'Meranti Putih Performance Arts #2"Seni Pertunjukan Alam, Lingkungan dan Pariwisata Kita"Event yang bakal menyajikan performance arts di tengah tengah hijaunya Hutan Meranti 🌲🌲Bersama para pelaku seni dengan berbagai penampilan yang patut untuk di hadiri. Di tambah ada beberapa rangkaian acara yang pastinya menambah kemeriahan acara ini⭐ Tari Kontemporer⭐ Musik Eksplorasi⭐ Happening Art⭐ Workshop Seni Pertunjukan✨ Pusakata @pusakata✨ Aviwkila @aviwkila✨ Eko Pece✨ Kemah Wisata Pemuda, Lomba Mewarna, Gelar Seni Budaya Lokal, Seni Instalasi, Lomba Memancing, Zona Kuliner dan UMKM, Zona Kreatifitas Pemuda, Lomba Foto Instagram ✨🗓️ 27-29 Oktober 2023📍Ekowisata Hutam Meranti, KotabaruYuk liburan weekendnya nonton sekalian nongkrong asik di tempat wisata, lihat suasana alam dengan berbagai acara yang hanya ada di MP2AF #2 @mp2af 🤩Wajib datang ya nonton "MP2AF #2"',
            'tanggal_mulai' => '2023-10-27',
            'tanggal_berakhir' => '2023-10-29',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
        ]);

        DB::table('events')->insert([
            'title' => 'Festival Gekraf Banua',
            'lokasi' => 'Taman Siring Laut',
            'foto' => 'public/fotoAcara/gekrafBanua.png',
            'kontenAcara' => 'Festival GEKRAF BANUA se-Kalsel
            di event ini kita bisa ketemu dan melihat hasil ekonomi kreatif kotabaru dan seluruh kalimantan selatan, dengan berbagai kegiatan akan di tampilkan
            
            • Pengukuhan Pengurus Gekrafs Kotabaru
            • Launching Aplikasi Si-Akrab Ekraf Kotabaru
            • Penyerahan Dokumen Roadmap Ekonomi Kreatif Kotabaru
            • Penyerahan Simbolis Sertifikat HKI
            • Penandatanganan Berita Acara Penetapan Struktur Komunitas 17 Subsektor Ekonomi Kreatif Kotabaru
            • Penyerahan Uang Pembinaan Bagi Pelaku Ekraf
            • Parade Band Kreatif Kotabaru
            • Launching Video Klip Cipta Lagu Kotabaru 2023
            • Berbagai Macam Lomba
            • Di Meriahkan oleh "FELIX IRWAN"
            @felixian.id 🤩
            
            🗓️ 17-19 November 2023
            📍Objek Wisata Taman Siring Laut, Kotabaru
            
            Di ikuti peserta dari berbagai Pemerintah Daerah, UMKM, Pelaku Ekraf, dan lainnya. Ayo berwisata di kotabaru dan mendukung ekonomi kreatif di Festival GEKRAF BANUA se-Kalsel
            
            Open Submission, Registrasi dan Info:
            0821-5733-8229
            0878-3353-9490',
            'tanggal_mulai' => '2023-11-17',
            'tanggal_berakhir' => '2023-11-19',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
        ]);

        DB::table('events')->insert([
            'title' => 'Festival Teluk Tamiyang',
            'lokasi' => 'Pulau Laut Tanjung Selayar',
            'foto' => 'public/fotoAcara/telukTamiyang.png',
            'kontenAcara' => 'FESTIVAL TELUK TAMIYANG 2023

            Sebuah perhelatan budaya dan pariwisata yang digelar di Kecamatan Pulau Laut Tanjung Selayar, Kotabaru, Kalimantan Selatan. Festival ini menampilkan berbagai kegiatan menarik yang menggambarkan kekayaan dan keunikan daerah ini. Salah satu kegiatan utama yang menjadi daya tarik festival ini adalah UPACARA ADAT "MAPPANRETASI", yaitu ritual memberi makan laut yang dilakukan oleh masyarakat nelayan suku Bugis sebagai bentuk rasa syukur atas hasil tangkapan ikan yang melimpah. Upacara ini dilakukan dengan melarungkan berbagai macam makanan atau sesajen di laut, diiringi oleh doa dan nyanyian. Upacara ini juga dihadiri oleh para pejabat daerah dan tokoh masyarakat.
            
            Selain upacara adat "Mappanretasi", festival ini juga menyajikan PARADE IKAN BAKAR SEPANJANG PANTAI, yang merupakan salah satu kuliner khas Kotabaru. Para pengunjung dapat menikmati berbagai jenis ikan segar yang dibakar dengan bumbu rempah-rempah yang lezat, sambil menikmati pemandangan pantai yang indah. Parade ikan bakar ini juga menjadi ajang promosi produk perikanan lokal yang berkualitas.
            
            Tidak ketinggalan, festival ini juga menampilkan hiburan rakyat, yang merupakan bentuk apresiasi terhadap seni dan budaya lokal. Di sini, para pengunjung dapat menyaksikan berbagai pertunjukan seni yang menarik dan mengagumkan, seperti tari-tarian tradisional, musik-musik daerah, dan lain-lain. Hiburan rakyat ini juga menjadi sarana pelestarian dan pengembangan seni dan budaya daerah.
            Dan di meriahkan oleh penyanyi-penyanyi asli daerah Kotabaru RATNA LIDA, SHANTI KDI dan RAZA KDI
            
            Sebuah festival yang tidak boleh dilewatkan oleh siapa pun yang ingin menikmati keindahan dan kekayaan daerah Kotabaru. Ayo, datang dan nikmati FESTIVAL TELUK TAMIYANG 2023 !!
            _____________________
            Media Partner :
            @kotabaruinfo
            @berita.kotabaru',
            'tanggal_mulai' => '2023-12-02',
            'tanggal_berakhir' => '2023-12-03',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
        ]);

        DB::table('events')->insert([
            'title' => 'Festival Katir Race',
            'lokasi' => 'Teluk Aru',
            'foto' => 'public/fotoAcara/katirRace.png',
            'kontenAcara' => 'balap perahu tenaga dayung ❌balap perahu tenaga angin ✅yang lagi ditrend nih balap balapan kapal/perahu. hmmm tapii udah pada tau belom? ternyata kotabaru juga ada lomba balapan perahu loh 🤔 belom tau? sini mimin kasi tauu..Dalam Rangka Memeriahkan Peringatan Hari Kemerdekaan RI ke 78 th "Festival Katir Race & Upacara Adat Malasuang Manu 2023" kembali hadirrrr 🤩🤩acara tahunan yang menjadi salah satu kearifan lokal nelayan disana sebagai bentuk pelestarian sejarah nenek moyang jaman dulu yang merantau menggunakan perahu katir hingga tinggal dan menetap di pesisir laut Kotabaru ⛵️Festival Katir Race & Upacara Adat Malasuang Manu 2023 hadir dengan kemasan yg berbeda dan tentunya menarik karena byk diisi oleh beragam rangkaian acara, seperti🔹 Lomba Masak Bahan Jepa🔹 Lomba Layang-layang🔹 Lomba Lagu Mandar🔹 Lomba Balap Katir⭐️ Guest Star @lida_ratna23 @raza_nah @santi_hadsant_official🗓️ 26-27 Agustus 2023📍 Teluk Aru, Pulau Laut Kepulauan, Kotabaruburuann di catet tanggalnya jangan sampe kelewat. event wisata budaya menarikkk yg ada hanya di #kotabaruajaso #ayokekotabaru🥳🥳',
            'tanggal_mulai' => '2023-08-26',
            'tanggal_berakhir' => '2023-08-27',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
        ]);

        DB::table('events')->insert([
            'title' => 'Festival Goa Lowo',
            'lokasi' => 'Objek Wisata Goa Lowo',
            'foto' => 'public/fotoAcara/goaLowo.png',
            'kontenAcara' => 'Wih! bakal banyak gelaran Seni Jawa nih di Goa Lowo 🤩

            yukk datang dan saksikan pergelarannya yang di balut dalam event "Festival Goa Lowo Kab. Kotabaru 2023" ⛰️
            
            Diramaikan Bazar UMKM & Ekonomi Kreatif, Wahana Permainan & Atraksi Budaya selama 12 hari',
            'tanggal_mulai' => '2023-08-12',
            'tanggal_berakhir' => '2023-08-23',
            'created_at' => '2023-12-22',
            'updated_at' => '2023-12-22',
        ]);
    }
}
