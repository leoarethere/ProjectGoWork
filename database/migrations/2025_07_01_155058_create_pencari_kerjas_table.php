<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_create_pencari_kerjas_table.php
    public function up(): void
    {
        Schema::create('pencari_kerjas', function (Blueprint $table) {
            $table->id(); // PK id_pelamar [cite: 118]
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // FK pengguna_id [cite: 119]
            $table->text('resume')->nullable(); // resume [cite: 120]
            $table->text('tentang_anda')->nullable(); // tentang_anda [cite: 121]
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pencari_kerjas');
    }
};
