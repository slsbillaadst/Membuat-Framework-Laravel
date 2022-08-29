<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            [
                'nama_barang' => 'Buku',
                'harga_barang' => 5000,
                'kategori_id' => 1,
                'supplier_id' => 1,
                'created_at' => now(),
            ],
            [
                'nama_barang' => 'Sendok',
                'harga_barang' => 7000,
                'kategori_id' => 2,
                'supplier_id' => 2,
                'created_at' => now(),
            ],
            [
                'nama_barang' => 'Laptop',
                'harga_barang' => 5000000,
                'kategori_id' => 3,
                'supplier_id' => 3,
                'created_at' => now(),
            ]
        ]);
    }
}