<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kegiatan', '50');
            $table->string('nama_kegiatan');
            $table->string('nama_sub_kegiatan');
            $table->string('kode_rekening');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_kegiatan');
    }
}
