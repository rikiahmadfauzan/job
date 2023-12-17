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
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik');
            $table->string('owner');
            $table->string('nama_perusahaan');
            $table->text('alamat');
            $table->string('email');
            $table->string('no_telpon');
            $table->string('gaji_min');
            $table->string('gaji_max');
            $table->string('posisi');
            $table->text('foto_perusahaan');
            $table->enum('status',['proses', 'disetujui', 'ditolak'])->default('proses');
            $table->text('deskripsi');
            $table->timestamps();

            $table->foreign('nik')->references('nik')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('name')->references('name')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaan');
    }
};
