<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paslon;

class PaslonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // membuat data paslon
    public function run()
    {
        Paslon::create([
            'nama' => 'Paslon 1',
            'visi' => 'Menjadi pilihan terbaik untuk masa depan yang lebih baik.',
            'misi' => "1. Memajukan pendidikan.\n2. Mengurangi pengangguran.\n3. Meningkatkan kesejahteraan masyarakat.",
            'programkerja' => '1. Membangun 100 sekolah baru.\n2. Menciptakan 1 juta lapangan kerja baru.',
            'gambar' => 'votingtittle.png',
            'jumlahvote' => 0,
        ]);

        Paslon::create([
            'nama' => 'Paslon 2',
            'visi' => 'Membangun masyarakat yang adil dan sejahtera.',
            'misi' => "1. Mewujudkan keadilan sosial.\n2. Menjamin kesejahteraan rakyat.\n3. Mengembangkan infrastruktur ekonomi.",
            'programkerja' => '1. Membangun 50 rumah sakit baru.\n2. Meningkatkan jaringan transportasi publik.',
            'gambar' => 'votingtittle.png',
            'jumlahvote' => 0,
        ]);

        Paslon::create([
            'nama' => 'Paslon 3',
            'visi' => 'Mengembangkan inovasi dan teknologi untuk masa depan yang cerah.',
            'misi' => "1. Menyediakan akses teknologi bagi semua lapisan masyarakat.\n2. Menumbuhkan startup dan industri kreatif.\n3. Menyelenggarakan pendidikan vokasi terbaik.",
            'programkerja' => '1. Membangun 10 pusat teknologi terdepan.\n2. Memberikan beasiswa untuk studi di bidang teknologi.',
            'gambar' => 'votingtittle.png',
            'jumlahvote' => 0,
        ]);


    }
}

