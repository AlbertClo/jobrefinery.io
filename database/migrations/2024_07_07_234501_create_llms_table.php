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
        Schema::create('llms', function (Blueprint $table) {
            $table->string('slug')->primary();
            $table->string('name');
            $table->string('provider')->nullable();
            $table->string('description')->nullable();
            $table->decimal('input_token_cost_per_million', 12, 6)->nullable();
            $table->decimal('output_token_cost_per_million', 12, 6)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('llms');
    }
};
