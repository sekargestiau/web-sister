<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    public function run()
    {
        DB::table('mata_kuliah')->insert([
            ['kode_matkul' => 'MK001', 'nama_matkul' => 'Matematika Diskrit', 'sks' => 3, 'ruang' => 'Ruang 101'],
            ['kode_matkul' => 'MK002', 'nama_matkul' => 'Struktur Data', 'sks' => 4, 'ruang' => 'Ruang 102'],
            ['kode_matkul' => 'MK003', 'nama_matkul' => 'Pemrograman Web', 'sks' => 3, 'ruang' => 'Ruang 103'],
            ['kode_matkul' => 'MK004', 'nama_matkul' => 'Algoritma dan Pemrograman', 'sks' => 4, 'ruang' => 'Ruang 104'],
            ['kode_matkul' => 'MK005', 'nama_matkul' => 'Basis Data', 'sks' => 3, 'ruang' => 'Ruang 105'],
        ]);
    }
}

