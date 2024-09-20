<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    public function run()
    {
        DB::table('dosen')->insert([
            ['nip' => '1976821319', 'nama' => 'Dr. Ahmad Fauzi', 'no_wa' => '081234567891'],
            ['nip' => '1988123131', 'nama' => 'Dr. Bunga Pertiwi', 'no_wa' => '081234567892'],
            ['nip' => '1989532623', 'nama' => 'Dr. Candra Arief', 'no_wa' => '081234567893'],
            ['nip' => '1972641231', 'nama' => 'Dr. Dian Nugraha', 'no_wa' => '081234567894'],
            ['nip' => '1980127124', 'nama' => 'Dr. Eka Sari', 'no_wa' => '081234567895'],
        ]);
    }
}

