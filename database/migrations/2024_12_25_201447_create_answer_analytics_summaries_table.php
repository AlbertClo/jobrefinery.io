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
        Schema::create('answer_analytics_summaries', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('raw_job_id')->index()->constrained('raw_jobs', 'id')->onDelete('cascade');
            $table->foreignUuid('question_id')->index()->constrained('questions', 'id')->onDelete('cascade');

            $table->text('answer_1')->nullable();
            $table->integer('answer_1_count')->nullable();
            $table->float('answer_1_percentage')->nullable();

            $table->text('answer_2')->nullable();
            $table->integer('answer_2_count')->nullable();
            $table->float('answer_2_percentage')->nullable();

            $table->text('answer_3')->nullable();
            $table->integer('answer_3_count')->nullable();
            $table->float('answer_3_percentage')->nullable();

            $table->jsonb('data')->nullable();

            $table->timestamps();

            $table->index(['raw_job_id', 'question_id'], 'raw_job_id_question_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_analytics_summaries');
    }
};
