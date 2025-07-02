<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_create_lowongans_table.php
    public function up(): void
    {
        Schema::create('lowongans', function (Blueprint $table) {
            $table->id(); // PK id_lowongan [cite: 124]
            $table->foreignId('perusahaan_id')->constrained('perusahaans')->onDelete('cascade'); // FK perusahaan_id [cite: 125]
            $table->string('judul'); // judul [cite: 126]
            $table->text('deskripsi'); // deskripsi [cite: 127]
            $table->string('lokasi'); // lokasi [cite: 128]
            $table->decimal('gaji', 12, 2)->nullable(); // gaji [cite: 131]
            $table->string('tipe_pekerjaan'); // tipe_pekerjaan [cite: 130]
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongans');
    }
};
