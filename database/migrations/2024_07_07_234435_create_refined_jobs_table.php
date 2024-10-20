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
        Schema::create('refined_jobs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('job_site_id')->index()->constrained('job_sites', 'id');
            $table->foreignUuid('cached_page_id')->index()->constrained('cached_pages', 'id');
            $table->foreignUuid('raw_job_id')->index()->constrained('raw_jobs', 'id');
            $table->string('heading')->nullable();
            $table->string('country_code')->nullable()->index();
            $table->boolean('requires_work_permit')->nullable();
            $table->foreignUuid('city_id')->nullable()->index()->constrained('cities', 'id');
            $table->foreignUuid('company_id')->nullable()->index()->constrained('companies', 'id');
            $table->timestamp('post_date')->nullable();
            $table->boolean('is_remote')->nullable();
            $table->boolean('is_hybrid')->nullable();
            $table->boolean('is_onsite')->nullable();
            $table->integer('days_in_office_per_week')->nullable();
            $table->text('original_description_html')->nullable();
            $table->text('original_description_text')->nullable();
            $table->text('llm_summary_markdown')->nullable();
            $table->text('human_summary_markdown')->nullable();
            $table->decimal('salary_from', 10, 2)->nullable();
            $table->decimal('salary_to', 10, 2)->nullable();
            $table->string('salary_currency')->nullable()->constrained('currencies', 'code');
            $table->decimal('salary_in_usd_from', 10, 2)->nullable();
            $table->decimal('salary_in_usd_to', 10, 2)->nullable();
            $table->string('timezone_from')->nullable();
            $table->string('timezone_to')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refined_jobs');
    }
};
