<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerkuliahanSeeder extends Seeder
{
    public function run()
    {
        DB::table('perkuliahan')->insert([
            ['nim' => 'M0520001', 'nip' => '1976821319', 'kode_matkul' => 'MK001', 'nilai' => 85.5],
            ['nim' => 'M0520002', 'nip' => '1988123131', 'kode_matkul' => 'MK002', 'nilai' => 90.0],
            ['nim' => 'M0520003', 'nip' => '1989532623', 'kode_matkul' => 'MK003', 'nilai' => 88.0],
            ['nim' => 'M0520004', 'nip' => '1972641231', 'kode_matkul' => 'MK004', 'nilai' => 92.5],
            ['nim' => 'M0520005', 'nip' => '1980127124', 'kode_matkul' => 'MK005', 'nilai' => 87.0],
        ]);
    }
}

