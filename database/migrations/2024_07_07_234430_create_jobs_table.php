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
        Schema::create('jobs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('cached_page_id')->index()->constrained('cached_pages', 'id');
            $table->foreignUuid('job_site_id')->index()->constrained('job_sites', 'id');
            $table->foreignUuid('city_id')->index()->constrained('cities', 'id');
            $table->string('original_url');
            $table->boolean('requires_work_permit')->default(false);
            $table->string('work_permit_country_code')->nullable()->index();
            $table->boolean('is_remote')->default(false);
            $table->boolean('is_hybrid')->default(false);
            $table->integer('days_in_office_per_week')->nullable();
            $table->text('original_description');
            $table->text('llm_summary');
            $table->decimal('salary_from', 10, 2)->nullable();
            $table->decimal('salary_to', 10, 2)->nullable();
            $table->string('salary_currency')->nullable()->constrained('currencies', 'code');
            $table->decimal('salary_in_usd_from', 10, 2)->nullable();
            $table->decimal('salary_in_usd_to', 10, 2)->nullable();
            $table->string('timezone_from')->nullable();
            $table->string('timezone_to')->nullable();
            $table->timestamps();

            $table->foreign('work_permit_country_code')->references('code')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
