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
        Schema::create('refined_job_lists_skill', function (Blueprint $table) {
            $table->foreignUuid('refined_job_id')->index()->constrained('refined_jobs')->onDelete('cascade');
            $table->foreignUuid('skill_id')->index()->constrained('skills')->onDelete('cascade');
            $table->enum('skill_importance', ['required', 'preferred', 'nice to have'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refined_job_lists_skill');
    }
};
