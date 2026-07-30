<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistributorSeeder extends Seeder
{
    public function run()
{
    DB::table('distributor')->insert([
        [
            'kode_distributor' => 'D001',
            'nama_distributor' => 'PT. Intralab Ekatama',
            'alamat' => 'Jakarta',
            'email' => 'intra@lab.com',
            'telepon' => '+0213456'
        ],
        [
            'kode_distributor' => 'D002',
            'nama_distributor' => 'PT GeneCraft Labs',
            'alamat' => 'Bandung',
            'email' => 'gene@craft.lab',
            'telepon' => '+6243210'
        ]
    ]);
}
}
