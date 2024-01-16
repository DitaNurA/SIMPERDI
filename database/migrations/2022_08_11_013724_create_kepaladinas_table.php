<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKepaladinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepaladinas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nip');
            $table->string('jabatan');
            $table->string('golongan');
            $table->string('pangkat');
            $table->text('foto');
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
        Schema::dropIfExists('kepaladinas');
    }
}
