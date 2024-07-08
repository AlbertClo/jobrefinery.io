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
        Schema::create('job_sites', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('scraper_id', 'scrapers', 'id')->constrained()->onDelete('cascade');
            $table->enum('type', ['company careers page', 'job board']);
            $table->string('name');
            $table->string('url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_sites');
    }
};
