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
        Schema::create('job_spec_emailed_to_user', function (Blueprint $table) {
            $table->foreignUuid('job_spec_id')->index()->onDelete('cascade');
            $table->foreignUuid('user_id')->index()->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('job_spec_id')->references('id')->on('job_specs');
            $table->foreign('user_id')->references('id')->on('users');

            $table->index(['user_id', 'job_spec_id'], 'job_emailed_to_user_job_spec_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_spec_emailed_to_user');
    }
};
