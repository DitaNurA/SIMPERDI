<?php

namespace Database\Seeders;

use App\UangHarianLuar;
use Illuminate\Database\Seeder;

class UangHarianLuarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinsi = [
            [
                'provinsi' => 'ACEH',
                'luar_daerah' => 360000,
                'pendidikan_pelatihan'=> 110000
            ],
            [
                'provinsi' => 'SUMATERA UTARA',
                'luar_daerah' => 370000,
                'pendidikan_pelatihan'=> 110000
            ],
            [
                'provinsi' => 'RIAU',
                'luar_daerah' => 370000,
                'pendidikan_pelatihan'=> 110000
            ],
            [
                'provinsi' => 'KEPULAUAN RIAU',
                'luar_daerah' => 370000,
                'pendidikan_pelatihan'=> 110000
            ],
            [
                'provinsi' => 'JAMBI',
                'luar_daerah' => 370000,
                'pendidikan_pelatihan'=>110000
            ],
            [
                'provinsi' => 'SUMATERA BARAT',
                'luar_daerah' => 380000,
                'pendidikan_pelatihan'=>110000
            ],
            [
                'provinsi' => 'SUMATERA SELATAN',
                'luar_daerah' => 380000,
                'pendidikan_pelatihan'=>110000
            ],
            [
                'provinsi' => 'LAMPUNG',
                'luar_daerah' => 380000,
                'pendidikan_pelatihan'=>110000
            ],
            [
                'provinsi' => 'BENGKULU',
                'luar_daerah' => 380000,
                'pendidikan_pelatihan'=>110000
            ],
            [
                'provinsi' => 'BANGKA BELITUNG',
                'luar_daerah' => 410000,
                'pendidikan_pelatihan'=>120000
            ],
            [
                'provinsi' => 'BANTEN',
                'luar_daerah' => 370000,
                'pendidikan_pelatihan'=>110000
            ],
            [
                'provinsi' => 'JAWA BARAT',
                'luar_daerah' => 430000,
                'pendidikan_pelatihan'=>130000
            ],
            [
                'provinsi' => 'D.K.I JAKARTA',
                'luar_daerah' => 530000,
                'pendidikan_pelatihan'=>160000
            ],
            [
                'provinsi' => 'JAWA TENGAH',
                'luar_daerah' => 370000,
                'pendidikan_pelatihan'=>110000
            ],
            [
                'provinsi' => 'D.I YOGYAKARTA',
                'luar_daerah' => 420000,
                'pendidikan_pelatihan'=>130000
            ],
            [
                'provinsi' => 'JAWA TIMUR',
                'luar_daerah' => 410000,
                'pendidikan_pelatihan'=>120000
            ],
            [
                'provinsi' => 'BALI',
                'luar_daerah' => 480000,
                'pendidikan_pelatihan'=>140000
            ],
            [
                'provinsi' => 'NUSA TENGGARA BARAT',
                'luar_daerah' => 440000,
                'pendidikan_pelatihan'=>130000
            ],
            [
                'provinsi' => 'NUSA TENGGARA TIMUR',
                'luar_daerah' => 430000,
                'pendidikan_pelatihan'=>130000
            ],
            [
                'provinsi' => 'KALIMANTAN BARAT',
                'luar_daerah' => 380000,
                'pendidikan_pelatihan'=>110000
            ],
            [
                'provinsi' => 'KALIMANTAN TENGAH',
                'luar_daerah' => 360000,
                'pendidikan_pelatihan'=>110000
            ],
            [
                'provinsi' => 'KALIMANTAN SELATAN',
                'luar_daerah' => 380000,
                'pendidikan_pelatihan'=>110000
            ],
            [
                'provinsi' => 'KALIMANTAN TIMUR',
                'luar_daerah' => 430000,
                'pendidikan_pelatihan'=>130000
            ],
            [
                'provinsi' => 'KALIMANTAN UTARA',
                'luar_daerah' => 430000,
                'pendidikan_pelatihan'=>130000
            ],
            [
                'provinsi' => 'SULAWESI UTARA',
                'luar_daerah' => 370000,
                'pendidikan_pelatihan'=>110000
            ],
            [
                'provinsi' => 'GORONTALO',
                'luar_daerah' => 370000,
                'pendidikan_pelatihan'=>110000
            ],
            [
                'provinsi' => 'SULAWESI BARAT',
                'luar_daerah' => 410000,
                'pendidikan_pelatihan'=>120000
            ],
            [
                'provinsi' => 'SULAWESI SELATAN',
                'luar_daerah' => 430000,
                'pendidikan_pelatihan'=>130000
            ],
            [
                'provinsi' => 'SULAWESI TENGAH',
                'luar_daerah' => 370000,
                'pendidikan_pelatihan'=>110000
            ],
            [
                'provinsi' => 'SULAWESI TENGGARA',
                'luar_daerah' => 380000,
                'pendidikan_pelatihan'=>110000
            ],
            [
                'provinsi' => 'MALUKU',
                'luar_daerah' => 380000,
                'pendidikan_pelatihan'=>110000
            ],
            [
                'provinsi' => 'MALUKU UTARA',
                'luar_daerah' => 430000,
                'pendidikan_pelatihan'=>130000
            ],
            [
                'provinsi' => 'PAPUA',
                'luar_daerah' => 580000,
                'pendidikan_pelatihan'=>170000
            ],
            [
                'provinsi' => 'PAPUA BARAT',
                'luar_daerah' => 480000,
                'pendidikan_pelatihan'=>140000
            ],
        ];

        UangHarianLuar::insert($provinsi);
    }
}
