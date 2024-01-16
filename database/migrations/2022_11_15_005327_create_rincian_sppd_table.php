<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRincianSppdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rincian_sppd', function (Blueprint $table) {
            $table->id();
            $table->string('no_sppd');
            $table->string('nama_lengkap');
            $table->string('nip');
            $table->string('jabatan');
            $table->string('pangkat');
            $table->string('golongan');
            $table->string('tanggal');
            $table->date('tanggal_berangkat');
            $table->date('tanggal_kembali');
            $table->string('selama');
            $table->string('belanja_bbm');
            $table->string('transport_pp');
            $table->string('uang_harian');
            $table->string('biaya_penginapan');
            $table->string('biaya_representase');
            $table->string('kode_rekening');
            $table->string('keperluan');
            $table->string('daerah_tujuan');
            $table->string('instansi_tujuan');
            $table->string('total_perjalanan_dinas');
            $table->string('nominal_total');
            $table->string('bayar_awal');
            $table->string('sisa');
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
        Schema::dropIfExists('rincian_sppd');
    }
}
