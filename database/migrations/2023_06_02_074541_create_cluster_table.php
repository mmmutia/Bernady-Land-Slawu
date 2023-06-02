<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cluster', function (Blueprint $table) {
            $table->id('id_cluster');
            $table->char('foto_cluster');
            $table->char('nama_cluster');
            $table->char('blok');
            $table->integer('jumlah_unit');
            $table->char('harga');
            $table->char('harga_dp');
            $table->char('filter');
            $table->char('jenis_cluster');
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
        Schema::dropIfExists('cluster');
    }
};
