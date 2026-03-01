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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // e.g., 'Coursera Python', 'IELTS'
            $table->string('issuer')->nullable(); // e.g., 'Coursera', 'British Council'
            $table->date('date_earned')->nullable();
            $table->string('file_path'); // Path to the image or PDF
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
