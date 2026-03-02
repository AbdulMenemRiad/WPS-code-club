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
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('slug')->unique();
        $table->string('category'); // e.g., 'Client Website', 'Backend', 'Mechatronics'
        $table->text('description'); // The "Problem vs Solution" write-up
        $table->longText('content')->nullable();
        $table->string('image_path')->nullable(); // For screenshots
        $table->string('video_path')->nullable(); // For animation/hardware showcase videos
        $table->string('live_url')->nullable(); // Link to active client site
        $table->string('demo_url')->nullable(); // Link to your self-hosted demo
        $table->string('github_url')->nullable(); // Link to backend scripts or Arduino code
        $table->boolean('is_featured')->default(false); // To pin top 3 to the homepage
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
