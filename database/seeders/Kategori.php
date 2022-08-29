<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Kategori extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            [
                'nama_kategori' => 'Alat Tulis',
                'created_at' => now(),
            ],
            [
                'nama_kategori' => 'Alat Dapur',
                'created_at' => now()
            ],
            [
                'nama_kategori' => 'Elektronik',
                'created_at' => now()
            ]
        ]);
    }
}