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
        Schema::create('llm_responses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('prompt');
            $table->timestamp('prompt_timestamp', 6);
            $table->text('response')->nullable();
            $table->float('temperature')->nullable();
            $table->timestamp('response_timestamp', 6)->nullable();
            $table->string('llm')->nullable();
            $table->integer('input_tokens')->nullable();
            $table->integer('output_tokens')->nullable();
            $table->decimal('cost', 15, 12)->nullable();
            $table->uuid('related_entity_id')->nullable();
            $table->string('related_entity_type')->nullable();

            $table->foreign('llm')->references('slug')->on('llms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('llm_responses');
    }
};
