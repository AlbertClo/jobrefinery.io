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
        Schema::create('job_spec_lists_skills', function (Blueprint $table) {
            $table->foreignUuid('job_spec_id')->index()->constrained('job_specs')->onDelete('cascade');
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
        Schema::dropIfExists('job_spec_lists_skills');
    }
};
