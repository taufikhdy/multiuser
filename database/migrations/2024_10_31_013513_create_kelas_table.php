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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();  // Primary key, auto-increment
            $table->string('nama_kelas');  // Nama kelas, misalnya "X IPA 1"
            $table->string('wali_kelas');  // Nama wali kelas
            $table->integer('tingkat');  // Tingkat kelas, misalnya 10, 11, atau 12
            $table->timestamps();  // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
