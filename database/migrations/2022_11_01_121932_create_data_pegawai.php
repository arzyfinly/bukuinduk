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
        Schema::create('data_pegawai', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nama',100)->nullable();
            $table->string('nip',20)->nullable();
            $table->string('nik',20)->nullable();
            $table->string('nuptk',20)->nullable();
            $table->string('email')->nullable();
            $table->enum('jenis_kelamin',['L','P'])->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('jurusan_id',2)->nullable();
            $table->string('posisi_id',2)->nullable();
            $table->string('jenis_pns',2)->nullable();
            $table->string('tmt_tugas')->nullable();
            $table->string('tmt_pangkat')->nullable();
            $table->string('masa_kerja')->nullable();
            $table->string('tmt_pns')->nullable();
            $table->string('tmt_pensiun')->nullable();
            $table->string('created_by')->nullable();
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
        Schema::dropIfExists('data_pegawai');
    }
};
