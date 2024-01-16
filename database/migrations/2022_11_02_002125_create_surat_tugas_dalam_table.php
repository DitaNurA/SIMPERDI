<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratTugasDalamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_tugas_dalam', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat_tugas');
            $table->date('tanggal');
            $table->date('tanggal_berangkat');
            $table->date('tanggal_kembali');
            $table->string('selama');
            $table->string('alat_angkutan');
            $table->string('tempat_berangkat');
            $table->string('tempat_tujuan');
            $table->string('uraian');
            $table->date('mulai_berlaku');
            $table->integer('tanda_tangan_dokumen_id');
            $table->integer('id_user');
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
        Schema::dropIfExists('surat_tugas_dalam');
    }
}
