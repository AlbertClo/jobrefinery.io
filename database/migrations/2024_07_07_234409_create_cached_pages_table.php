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
        Schema::create('cached_pages', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('job_site_id')->nullable();
            $table->uuid('parent_id')->nullable();
            $table->string('url_full');
            $table->string('url_origin');
            $table->string('url_pathname');
            $table->json('query_params')->nullable();
            $table->text('document');
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('job_site_id')->references('id')->on('job_sites')->onDelete('cascade');
        });

        Schema::table('cached_pages', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('cached_pages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cached_pages');
    }
};
