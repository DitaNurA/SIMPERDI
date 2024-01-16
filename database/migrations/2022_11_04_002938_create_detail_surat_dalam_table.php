<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSuratDalamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_surat_dalam', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('surat_tugas_dalam_id');
            $table->string('no_sppd');
            $table->string('nip', '20');
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
        Schema::dropIfExists('detail_surat_dalam');
    }
}
