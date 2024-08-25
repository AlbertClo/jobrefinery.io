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
        Schema::create('job_lists_skills', function (Blueprint $table) {
            $table->foreignUuid('job_id')->index()->constrained('jobs')->onDelete('cascade');
            $table->foreignUuid('skill_id')->index()->constrained('skills')->onDelete('cascade');
            $table->enum('skill_importance', ['required', 'preferred', 'nice to have']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_lists_skills');
    }
};
