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
        Schema::table('simpan_cluster', function (Blueprint $table) {
            $table->foreignID('id_cluster')->references('id_cluster')->on('cluster')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('simpan_cluster', function (Blueprint $table) {
            $table->dropForeign(['id_cluster']);
            $table->dropColumn('id_cluster');
        });
    }
};
