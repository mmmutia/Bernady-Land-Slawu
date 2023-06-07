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
        Schema::table('progres', function (Blueprint $table) {
            $table->foreignID('id_pemesanan_rumah')->after("id")->references('id')->on('pemesanan_rumah')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('progres', function (Blueprint $table) {
            $table->dropForeign(['id_pemesanan_rumah']);
            $table->dropColumn('id_pemesanan_rumah');
        });
    }
};
