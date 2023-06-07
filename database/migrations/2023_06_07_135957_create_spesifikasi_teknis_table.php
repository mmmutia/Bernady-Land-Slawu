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
        Schema::create('spesifikasi_teknis', function (Blueprint $table) {
            $table->id();
            $table->string('pondasi');
            $table->string('dinding');
            $table->string('rangka_atap');
            $table->string('kusen');
            $table->string('plafond');
            $table->string('air');
            $table->string('listrik');
            $table->string('jumlah_kamar');
            $table->string('luas_tanah');
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
        Schema::dropIfExists('spesifikasi_teknis');
    }
};
