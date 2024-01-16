<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiayaRepresentasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $representase = [
            [
                'jabatan' => 'Pejabat Eselon II',
                'luar_daerah' => 150000,
                'dalam_daerah' => 75000,
            ],
        ];

        DB::table('biaya_representasi')->insert($representase);
    }
}
