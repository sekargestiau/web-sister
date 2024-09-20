<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        DB::table('mahasiswa')->insert([
            ['nim' => 'M0520001', 'nama' => 'Andi Wijaya', 'alamat' => 'Jl. Merpati No. 10'],
            ['nim' => 'M0520002', 'nama' => 'Budi Santoso', 'alamat' => 'Jl. Kenari No. 5'],
            ['nim' => 'M0520003', 'nama' => 'Citra Lestari', 'alamat' => 'Jl. Anggrek No. 12'],
            ['nim' => 'M0520004', 'nama' => 'Dewi Maharani', 'alamat' => 'Jl. Mawar No. 15'],
            ['nim' => 'M0520005', 'nama' => 'Eko Pratama', 'alamat' => 'Jl. Melati No. 8'],
        ]);
    }
}

