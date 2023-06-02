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
            $table->id('id_pemesanan_rumah');
            $table->char('nama_pemesan');
            $table->char('alamat');
            $table->char('no_telp_pemesan');
            // $table->id('id_cluster');
            $table->date('tgl_pemesanan');
            $table->char('fotocopy_ktp');
            $table->char('jenis_pembayaran');
            $table->integer('jml_cicilan_dp');
            $table->integer('jml_cicilan_inhouse');
            // $table->id('id_user');
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
