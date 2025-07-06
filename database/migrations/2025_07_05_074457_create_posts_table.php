<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id'); // Optional, if you want to track the author
            $table->string('title');
            $table->string('slug')->unique();
            // $table->string('author')->nullable();
            $table->string('status')->default('published'); // draft, published, archived
            $table->string('visibility')->default('public'); // public, private, unlisted
            $table->string('language')->default('en'); // default language
            $table->text('excerpt')->nullable();
            $table->text('body');
            $table->string('image')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};