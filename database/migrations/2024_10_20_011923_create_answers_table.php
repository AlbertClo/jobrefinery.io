<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('question_id')->index()->constrained('questions', 'id')->onDelete('cascade');
            $table->foreignUuid('raw_job_id')->index()->constrained('raw_jobs', 'id')->onDelete('cascade');
            $table->foreignUuid('llm_response_id')->index()->constrained('llm_responses', 'id')->onDelete('cascade');
            $table->string('author_id')->index();
            $table->string('author_type');
            $table->float('temperature')->nullable();
            $table->jsonb('answer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
