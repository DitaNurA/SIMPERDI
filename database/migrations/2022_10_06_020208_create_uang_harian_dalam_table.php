<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUangHarianDalamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uang_harian_dalam', function (Blueprint $table) {
            $table->id();
            $table->string('provinsi');
            $table->string('dalam_daerah');
            $table->string('pendidikan_pelatihan');
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
        Schema::dropIfExists('uang_harian_dalam');
    }
}
