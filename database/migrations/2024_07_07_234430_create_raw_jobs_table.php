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
        Schema::create('raw_jobs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('cached_page_id')->index()->constrained('cached_pages', 'id');
            $table->foreignUuid('job_site_id')->index()->constrained('job_sites', 'id');
            $table->string('original_url')->nullable();
            $table->string('direct_link')->nullable()->unique();
            $table->timestamp('post_date')->nullable();
            $table->text('original_description_html')->nullable();
            $table->text('original_description_text')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('raw_jobs');
    }
};
