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
        Schema::create('data_induk', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nama',150)->nullable();
            $table->string('nis',20)->nullable();
            $table->string('nisn',20)->nullable();
            $table->string('nik',20)->nullable();
            $table->string('kelas')->nullable();
            $table->enum('jenis_kelamin',['L','P'])->nullable();
            $table->longtext('data_siswa')->nullable();
            $table->longtext('tempat_tinggal')->nullable();
            $table->longtext('ket_sehat')->nullable();
            $table->longtext('ket_pendidikan')->nullable();
            $table->longtext('ayah_kandung')->nullable();
            $table->longtext('ibu_kandung')->nullable();
            $table->longtext('wali')->nullable();
            $table->longtext('kegemaran')->nullable();
            $table->longtext('ket_pengembangan')->nullable();
            $table->longtext('ket_selesai_pendidikan')->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('data_induk');
    }
};
