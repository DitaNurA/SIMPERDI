<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpjDalamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spj_dalam', function (Blueprint $table) {
            $table->id();
            $table->string('no_sppd');
            $table->string('nama_lengkap');
            $table->string('nip');
            $table->string('jabatan');
            $table->string('pangkat');
            $table->string('golongan');
            $table->string('tanggal_berangkat');
            $table->string('tanggal_kembali');
            $table->string('selama');
            $table->string('uraian');
            $table->string('kegiatan');
            $table->string('subkegiatan');
            $table->string('jumlah');
            $table->string('tanda_tangan');
            $table->string('kode_rekening');
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
        Schema::dropIfExists('spj_dalam');
    }
}
