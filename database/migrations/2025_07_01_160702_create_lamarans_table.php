<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_create_lamarans_table.php
    public function up(): void
    {
        Schema::create('lamarans', function (Blueprint $table) {
            $table->id(); // PK id_lamaran [cite: 142]
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // FK pengguna_id [cite: 144]
            $table->foreignId('lowongan_id')->constrained('lowongans')->onDelete('cascade'); // FK lowongan_id [cite: 148]
            $table->timestamp('lamaran_masuk')->useCurrent(); // lamaran_masuk [cite: 149]
            // Status: pending, diterima, ditolak
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lamarans');
    }
};
