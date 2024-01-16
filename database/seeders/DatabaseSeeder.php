<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(TransportasiToTerminalSeeder::class);
        //$this->call(TransportasiToBandaraSeeder::class);
        $this->call(BiayaHotelSeeder::class);
        $this->call(BiayaRepresentasiSeeder::class);
        $this->call(UangHarianDalamSeeder::class);
        $this->call(UangHarianLuarSeeder::class);
    }
}
