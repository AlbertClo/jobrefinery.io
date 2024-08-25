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
        Schema::create('scrapers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('job_site_id')->index()->constrained('job_sites', 'id');
            $table->string('classname')->comment('The namespace and class name of the scraper for this job site');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scrapers');
    }
};
