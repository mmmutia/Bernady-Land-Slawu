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
        Schema::create('pembayaran_dp', function (Blueprint $table) {
            $table->id('id_pembayaran_dp');
            // $table->id('id_pemesanan_rumah');
            $table->date('tgl_pembayaran_dp');
            $table->char('bukti_pembayaran_dp');
            $table->char('status_dp');
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
        Schema::dropIfExists('pembayaran_dp');
    }
};
