<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('permohonans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('nama_siswa',100);
            $table->string('nik', 18)->nullable();
            $table->string('nisn', 18)->nullable();
            $table->string('tempat_lahir',255)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('kelas')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('alamat_siswa',255)->nullable();
            $table->text('alasan_pindah')->nullable();
            $table->string('npsn_sekolah_asal')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('kec_sekolah_asal')->nullable();
            $table->string("npsn_sek_tujuan")->nullable();
            $table->string('sek_tujuan')->nullable();
            $table->string('kab_sek_tujuan')->nullable();
            $table->string('file_mut_sek_asal')->nullable();
            $table->string('file_super_sek_tujuan')->nullable();
            $table->string('file_pc_rapor')->nullable();
            $table->string('file_super_ortu')->nullable();
            $table->string('file_surat_rekom_mutasi')->nullable();
            $table->string('status',12)->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonans');
    }
};
