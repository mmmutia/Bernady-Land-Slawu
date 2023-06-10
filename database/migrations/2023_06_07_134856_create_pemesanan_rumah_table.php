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
        Schema::create('pemesanan_rumah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('nama_cluster');
            $table->date('tgl_pemesanan');
            $table->string('fc_ktp');
            $table->string('jenis_pembayaran');
            $table->string('jumlah_cicilan_dp');
            $table->string('jumlah_cicilan_inhouse');
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
        Schema::dropIfExists('pemesanan_rumah');
    }
};
