<?php

namespace Database\Seeders;

use App\BiayaHotel;
use Illuminate\Database\Seeder;

class BiayaHotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinsi = [
            // Aceh
            [
                'provinsi' => 'ACEH',
                'satuan' => 'OH',
                'tarif_a' => 3526000,
                'tarif_b' => 1294000,
                'tarif_c' => 556000,
                'tarif_d' => 556000
            ],

            // Sumatera Utara
            [
                'provinsi' => 'SUMATERA UTARA',
                'satuan' => 'OH',
                'tarif_a' => 1518000,
                'tarif_b' => 1100000,
                'tarif_c' => 530000,
                'tarif_d' => 530000,
            ],
            
            // Riau
            [
                'provinsi' => 'RIAU',
                'satuan' => 'OH',
                'tarif_a' => 3119000,
                'tarif_b' => 1650000,
                'tarif_c' => 852000,
                'tarif_d' => 852000,
            ],
    
            // Kepulauan Riau
            [
                'provinsi' => 'KEPULAUAN RIAU',
                'satuan' => 'OH',
                'tarif_a' => 1854000,
                'tarif_b' => 1037000,
                'tarif_c' => 792000,
                'tarif_d' => 792000,
            ],
            
            // Jambi
            [
                'provinsi' => 'JAMBI',
                'satuan' => 'OH',
                'tarif_a' => 3337000,
                'tarif_b' => 1212000,
                'tarif_c' => 580000,
                'tarif_d' => 580000,
            ],
            
            // Sumatera Barat
            [
                'provinsi' => 'SUMATERA BARAT',
                'satuan' => 'OH',
                'tarif_a' => 3332000,
                'tarif_b' => 1353000,
                'tarif_c' => 650000,
                'tarif_d' => 650000,
            ],
            
            // Sumatera Selatan
            [
                'provinsi' => 'SUMATERA SELATAN',
                'satuan' => 'OH',
                'tarif_a' => 3083000,
                'tarif_b' => 1570000,
                'tarif_c' => 861000,
                'tarif_d' => 861000,
            ],
            
            // Lampung
            [
                'provinsi' => 'LAMPUNG',
                'satuan' => 'OH',
                'tarif_a' => 2067000,
                'tarif_b' => 1140000,
                'tarif_c' => 580000,
                'tarif_d' => 580000,
            ],

            // Bengkulu
            [
                'provinsi' => 'BENGKULU',
                'satuan' => 'OH',
                'tarif_a' => 1628000,
                'tarif_b' => 1546000,
                'tarif_c' => 630000,
                'tarif_d' => 630000,
            ],

            // Bangka Belitung
            [
                'provinsi' => 'BANGKA BELITUNG',
                'satuan' => 'OH',
                'tarif_a' => 2838000,
                'tarif_b' => 1957000,
                'tarif_c' => 622000,
                'tarif_d' => 622000,

            ],

            // Banten
            [
                'provinsi' => 'BANTEN',
                'satuan' => 'OH',
                'tarif_a' => 2373000,
                'tarif_b' => 1000000,
                'tarif_c' => 718000,
                'tarif_d' => 718000,
            ],
            
            // Jawa Barat
            [
                'provinsi' => 'JAWA BARAT',
                'satuan' => 'OH',
                'tarif_a' => 2755000,
                'tarif_b' => 1006000,
                'tarif_c' => 570000,
                'tarif_d' => 570000,
            ],
            
            // D.K.I Jakarta
            [
                'provinsi' => 'D.K.I JAKARTA',
                'satuan' => 'OH',
                'tarif_a' => 1490000,
                'tarif_b' => 992000,
                'tarif_c' => 730000,
                'tarif_d' => 730000,
            ],
            
            // Jawa Tengah
            [
                'provinsi' => 'JAWA TENGAH',
                'satuan' => 'OH',
                'tarif_a' => 1480000,
                'tarif_b' => 954000,
                'tarif_c' => 600000,
                'tarif_d' => 600000,
            ],

            // D.I Yogyakarta
            [
                'provinsi' => 'D.I YOGYAKARTA',
                'satuan' => 'OH',
                'tarif_a' => 2695000,
                'tarif_b' => 1384000,
                'tarif_c' => 845000,
                'tarif_d' => 845000,

            ],
            
            // Jawa Timur
            [
                'provinsi' => 'JAWA TIMUR',
                'satuan' => 'OH',
                'tarif_a' => 1605000,
                'tarif_b' => 1076000,
                'tarif_c' => 664000,
                'tarif_d' => 664000,
            ],

            // Bali
            [
                'provinsi' => 'BALI',
                'satuan' => 'OH',
                'tarif_a' => 1946000,
                'tarif_b' => 990000,
                'tarif_c' => 910000,
                'tarif_d' => 910000,
            ],

            // Nusa Tenggara Barat
            [
                'provinsi' => 'NUSA TENGGARA BARAT',
                'satuan' => 'OH',
                'tarif_a' => 2648000,
                'tarif_b' => 1418000,
                'tarif_c' => 580000,
                'tarif_d' => 580000,
            ],

            // Nusa Tenggara Timur
            [
                'provinsi' => 'NUSA TENGGARA TIMUR',
                'satuan' => 'OH',
                'tarif_a' => 1493000,
                'tarif_b' => 1355000,
                'tarif_c' => 550000,
                'tarif_d' => 550000,
            ],

            // Kalimantan Barat
            [
                'provinsi' => 'KALIMANTAN BARAT',
                'satuan' => 'OH',
                'tarif_a' => 1538000,
                'tarif_b' => 1125000,
                'tarif_c' => 538000,
                'tarif_d' => 538000,
            ],

            // Kalimantan Tengah
            [
                'provinsi' => 'KALIMANTAN TENGAH',
                'satuan' => 'OH',
                'tarif_a' => 3391000,
                'tarif_b' => 1160000,
                'tarif_c' => 659000,
                'tarif_d' => 659000,
            ],

            // Kalimantan Selatan
            [
                'provinsi' => 'KALIMANTAN SELATAN',
                'satuan' => 'OH',
                'tarif_a' => 3316000,
                'tarif_b' => 1500000,
                'tarif_c' => 540000,
                'tarif_d' => 540000,
            ],

            // Kalimantan Timur
            [
                'provinsi' => 'KALIMANTAN TIMUR',
                'satuan' => 'OH',
                'tarif_a' => 2188000,
                'tarif_b' => 1507000,
                'tarif_c' => 804000,
                'tarif_d' => 804000,
            ],

            // Kalimantan Utara
            [
                'provinsi' => 'KALIMANTAN UTARA',
                'satuan' => 'OH',
                'tarif_a' => 2188000,
                'tarif_b' => 1507000,
                'tarif_c' => 804000,
                'tarif_d' => 804000,
            ],
            
            // Sulawesi Utara
            [
                'provinsi' => 'SULAWESI UTARA',
                'satuan' => 'OH',
                'tarif_a' => 2290000,
                'tarif_b' => 924000,
                'tarif_c' => 782000,
                'tarif_d' => 782000,
            ],
            
            // Gorontalo
            [
                'provinsi' => 'GORONTALO',
                'satuan' => 'OH',
                'tarif_a' => 2549000,
                'tarif_b' => 1431000,
                'tarif_c' => 764000,
                'tarif_d' => 764000,
            ],

            // Sulawesi Barat
            [
                'provinsi' => 'SULAWESI BARAT',
                'satuan' => 'OH',
                'tarif_a' => 2581000,
                'tarif_b' => 1075000,
                'tarif_c' => 704000,
                'tarif_d' => 704000,
            ],

            // Sulawesi Selatan
            [
                'provinsi' => 'SULAWESI SELATAN',
                'satuan' => 'OH',
                'tarif_a' => 1550000,
                'tarif_b' => 1020000,
                'tarif_c' => 732000,
                'tarif_d' => 732000,
            ],

            // Sulawesi Tengah
            [
                'provinsi' => 'SULAWESI TENGAH',
                'satuan' => 'OH',
                'tarif_a' => 2027000,
                'tarif_b' => 1567000,
                'tarif_c' => 951000,
                'tarif_d' => 951000,
            ],

            // Sulawesi Tenggara
            [
                'provinsi' => 'SULAWESI TENGGARA',
                'satuan' => 'OH',
                'tarif_a' => 2059000,
                'tarif_b' => 1297000,
                'tarif_c' => 786000,
                'tarif_d' => 786000,
            ],

            // Maluku
            [
                'provinsi' => 'MALUKU',
                'satuan' => 'OH',
                'tarif_a' => 3240000,
                'tarif_b' => 1048000,
                'tarif_c' => 667000,
                'tarif_d' => 667000,
            ],
            
            // Maluku Utara
            [
                'provinsi' => 'MALUKU UTARA',
                'satuan' => 'OH',
                'tarif_a' => 3175000,
                'tarif_b' => 1073000,
                'tarif_c' => 600000,
                'tarif_d' => 600000,
            ],

            // Papua
            [
                'provinsi' => 'PAPUA',
                'satuan' => 'OH',
                'tarif_a' => 3318000,
                'tarif_b' => 2521000,
                'tarif_c' => 829000,
                'tarif_d' => 829000,
            ],

            // Papua Barat
            [
                'provinsi' => 'PAPUA BARAT',
                'satuan' => 'OH',
                'tarif_a' => 3212000,
                'tarif_b' => 2056000,
                'tarif_c' => 718000,
                'tarif_d' => 718000,
            ],
        ];

        BiayaHotel::insert($provinsi);
    }
}
