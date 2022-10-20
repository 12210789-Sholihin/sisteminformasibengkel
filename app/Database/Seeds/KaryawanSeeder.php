<?php

namespace App\Database\Seeds;

use App\Models\Karyawan;
use CodeIgniter\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    public function run()
    {
        $id = (new Karyawan())->insert([
            'nama_lengkap' => 'Marsianus',
            'email' => 'marsianus@gmail.com',
            'nohp' => '089564378932',
            'alamat' => 'Adisucipto',
            'kota' => 'Pontianak',
            'sandi' => '',
            'token_reset' => '',
            'level' => 'MAN',
            'foto' => '',
        ]);
        echo "hasil insert $id";
    }
}
