<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiayaHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biaya_hotel', function (Blueprint $table) {
            $table->id();
            $table->string('provinsi');
            $table->string('satuan');
            $table->integer('tarif_a');
            $table->integer('tarif_b');
            $table->integer('tarif_c');
            $table->integer('tarif_d');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biaya_hotel');
    }
}
