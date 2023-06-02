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
        Schema::create('proggres', function (Blueprint $table) {
            $table->id('id');
            // $table->id('id_pemesanan');
            // $table->id('id_user');
            $table->enum('status', ['Pengerjaan', 'Selesai']);
            $table->text('keterangan');
            $table->char('foto');
            $table->date('tanggal');
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
        Schema::dropIfExists('proggres');
    }
};
