<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_create_users_table.php
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // PK id_pengguna [cite: 108]
            $table->string('name'); // nama [cite: 109]
            $table->string('username')->unique(); // username [cite: 109]
            $table->string('slug')->unique(); // slug [cite: 109]
            $table->integer('usia')->nullable(); // usia [cite: 110]
            $table->text('alamat')->nullable(); // alamat [cite: 111]
            $table->string('no_telepon')->nullable(); // no_telepon [cite: 115]
            $table->string('email')->unique(); // email [cite: 112]
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password'); // password [cite: 113]
            // Role: 1=Admin, 2=Perusahaan, 3=Pencari Kerja
            $table->enum('role_pengguna', ['1', '2', '3'])->default('1'); // role_pengguna
            $table->boolean('status_akun')->default(true); // status [cite: 116]
            $table->string('foto')->nullable(); // foto [cite: 114]
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
