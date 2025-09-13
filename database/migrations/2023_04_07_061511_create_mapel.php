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
        Schema::create('mapel', function (Blueprint $table) {
            $table->id();
            $table->string('kelompok');
            $table->string('nama');
            $table->timestamps();
        });
        //next jika perlu ada tambahan kurikulum
        //buat baru tabel kurikulum, lalu tambahkan kurikulum id ke mapel
        //setiap data induk memiliki id kurikulum sendiri
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mapel');
    }
};
