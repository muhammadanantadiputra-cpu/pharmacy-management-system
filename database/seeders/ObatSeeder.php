<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
{
    public function run()
{
    DB::table('obat')->insert([
        [
            'kode_obat' => 'A001',
            'jenis_obat' => 'Generik',
            'nama_obat' => 'Amoxilin',
            'harga' => 7000,
            'stok' => 60,
            'distributor' => 'D001'
        ],
        [
            'kode_obat' => 'A002',
            'jenis_obat' => 'Generik',
            'nama_obat' => 'As. Mafenamat',
            'harga' => 9000,
            'stok' => 50,
            'distributor' => 'D001'
        ],
        [
            'kode_obat' => 'A003',
            'jenis_obat' => 'Paten',
            'nama_obat' => 'Ibuprofen',
            'harga' => 45000,
            'stok' => 40,
            'distributor' => 'D002'
        ],
        [
            'kode_obat' => 'A004',
            'jenis_obat' => 'Paten',
            'nama_obat' => 'Ranitidine',
            'harga' => 47000,
            'stok' => 30,
            'distributor' => 'D002'
        ],
        [
            'kode_obat' => 'A005',
            'jenis_obat' => 'Paten',
            'nama_obat' => 'Neurodex',
            'harga' => 60000,
            'stok' => 20,
            'distributor' => 'D002'
        ]
    ]);
}
}
