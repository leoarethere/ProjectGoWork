<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_create_perusahaans_table.php
    public function up(): void
    {
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->id(); // PK id_perusahaan [cite: 99]
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // FK pengguna_id [cite: 100]
            $table->string('nama_perusahaan'); // nama_perusahaan [cite: 101]
            $table->text('deskripsi')->nullable(); // deskripsi [cite: 104]
            $table->string('lokasi')->nullable(); // lokasi [cite: 103]
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaans');
    }
};
