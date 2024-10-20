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
        Schema::create('refined_job_hires_from_country', function (Blueprint $table) {
            $table->foreignUuid('refined_job_id')->index()->constrained('refined_jobs')->onDelete('cascade');
            $table->string('country_code')->nullable()->index();
            $table->timestamps();

            $table->foreign('country_code')->references('code')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refined_job_hires_from_country');
    }
};
