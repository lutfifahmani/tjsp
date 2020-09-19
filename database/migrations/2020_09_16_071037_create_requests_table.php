<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('program');
            $table->string('jenis_permohonan');
            $table->string('nama_perusahaan');
            $table->string('alamat_perusahaan');
            $table->string('email');
            $table->string('no_telepon');
            $table->string('jenis_bantuan');
            $table->string('jumlah');
            $table->string('nilai_asumsi');
            $table->string('tahun');
            $table->string('keterangan');
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
        Schema::dropIfExists('requests');
    }
}
