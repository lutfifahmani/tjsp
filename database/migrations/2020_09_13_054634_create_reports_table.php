<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('judul')->nullable();
            $table->unsignedBigInteger('id_perusahaan');
            $table->foreign('id_perusahaan')
                ->references('id')->on('companies')
                ->onDelete('cascade');
            $table->string('sektor');
            $table->string('sub_sektor')->nullable();
            $table->string('kontribusi');
            $table->string('jumlah');
            $table->string('nominal');
            $table->string('tujuan');
            $table->string('lokasi');
            $table->string('latling')->nullable();
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
        Schema::dropIfExists('reports');
    }
}
