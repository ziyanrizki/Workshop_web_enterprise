<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    public function run(): void
    {
        Anggota::create([
            'nama' => 'Rian Pratama',
            'alamat' => 'Jl. Merdeka No. 12',
            'no_telp' => '081234567890',
            'tgl_lhr' => '2002-05-15',
        ]);

        Anggota::create([
            'nama' => 'Siti Rahma',
            'alamat' => 'Jl. Mawar No. 45',
            'no_telp' => '089876543210',
            'tgl_lhr' => '2003-08-20',
        ]);
    }
}   