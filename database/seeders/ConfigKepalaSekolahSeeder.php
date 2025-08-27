<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ConfigKepalaSekolah;

class ConfigKepalaSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ConfigKepalaSekolah::create([
                                'nama'      => 'SYAIFUL RAHMAN DASUKI, S.Pd.,M.M.Pd.',
                                'jabatan'   => 'Pembina Tk. I',
                                'nip'       => '19720311 199412 1 002',
                            ]);
    }
}
