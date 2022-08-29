<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class Supplier extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier')->insert([
            [
                'nama' => 'Rahmita Dwi K',
                'no_hp' => '081273500608',
                'email' => 'rahdwi@gmail.com',
                'created_at' => now(),
            ],
            [
                'nama' => 'Salsabilla A',
                'no_hp' => '081273500605',
                'email' => 'salsabillaad123@gmail,com',
                'created_at' => now(),
            ],
            [
                'nama' => 'Aulia',
                'no_hp' => '081273500500',
                'email' => 'aulia456@gmail,com',
                'created_at' => now(),
            ],
        ]);
    }
}