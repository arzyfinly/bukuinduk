<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mapel;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value = [
            [
                'nama'      => 'PENDIDIKAN AGAMA BUDI PEKERTI',
                'kelompok'  => 'A'
            ],
            [
                'nama'      => 'PENDIDIKAN PANCASILA DAN KEWARGANEGARAAN',
                'kelompok'  => 'A'
            ],
            [
                'nama'      => 'BAHASA INDONESIA',
                'kelompok'  => 'A'
            ],
            [
                'nama'      => 'MATEMATIKA',
                'kelompok'  => 'A'
            ],
            [
                'nama'      => 'ILMU PENGETAHUAN ALAM',
                'kelompok'  => 'A'
            ],
            [
                'nama'      => 'ILMU PENGETAHUAN SOSIAL',
                'kelompok'  => 'A'
            ],
            [
                'nama'      => 'BAHASA INGGRIS',
                'kelompok'  => 'A'
            ],
            [
                'nama'      => 'SENI BUDAYA',
                'kelompok'  => 'B'
            ],
            [
                'nama'      => 'PENDIDIKAN JASMANI DAN OLAHRAGA',
                'kelompok'  => 'B'
            ],
            [
                'nama'      => 'PRAKARYA / TIK',
                'kelompok'  => 'B'
            ],
            [
                'nama'      => 'BAHASA MADURA',
                'kelompok'  => 'B'
            ],
            [
                'nama'      => "BACA TULIS AL-QUR'AN",
                'kelompok'  => 'B'
            ],
            [
                'nama'      => 'PRAMUKA',
                'kelompok'  => 'EKTRAKURIKULER'
            ],
        ];

        foreach($value as $data){
            Mapel::create($data);
        }
    }
}
