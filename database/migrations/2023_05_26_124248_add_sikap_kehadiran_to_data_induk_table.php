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
        Schema::table('data_induk', function (Blueprint $table) {
            $table->longtext('sikap')->after('nilai')->nullable();
            $table->longtext('kehadiran')->after('sikap')->nullable();
            $table->longtext('status_akhir_tahun')->after('kehadiran')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_induk', function (Blueprint $table) {
            //
        });
    }
};
