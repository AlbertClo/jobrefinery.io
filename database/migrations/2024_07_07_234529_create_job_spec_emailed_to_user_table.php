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
        Schema::create('job_emailed_to_user', function (Blueprint $table) {
            $table->foreignUuid('refined_job_id')->index()->onDelete('cascade');
            $table->foreignUuid('user_id')->index()->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();

            $table->index(['user_id', 'refined_job_id'], 'job_emailed_to_user_job_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_emailed_to_user');
    }
};
