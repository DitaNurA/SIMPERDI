<?php

namespace Database\Seeders;

use App\UangHarianDalam;
use Illuminate\Database\Seeder;

class UangHarianDalamSeeder extends Seeder
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
                'provinsi' => 'Dalam Kabupaten Tuban',
                'dalam_daerah' => 160000,
                'pendidikan_pelatihan'=>120000
            ],
        ];

        UangHarianDalam::insert($provinsi);
    }
}
