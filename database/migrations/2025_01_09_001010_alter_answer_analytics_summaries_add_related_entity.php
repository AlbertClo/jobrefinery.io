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
        Schema::table('answer_analytics_summaries', function (Blueprint $table) {
            $table->uuid('related_entity_id')->nullable();
            $table->string('related_entity_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('answer_analytics_summaries', function (Blueprint $table) {
            $table->dropColumn('related_entity_id');
            $table->dropColumn('related_entity_type');
        });
    }
};
