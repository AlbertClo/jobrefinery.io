<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class RawJob extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'cached_page_id',
        'job_site_id',
        'original_url',
        'direct_link',
        'post_date',
        'requires_work_permit',
        'work_permit_country_code',
        'is_remote',
        'is_hybrid',
        'days_in_office_per_week',
        'original_description_html',
        'original_description_text',
        'llm_summary',
        'salary_from',
        'salary_to',
        'salary_currency',
        'salary_in_usd_from',
        'salary_in_usd_to',
        'timezone_from',
        'timezone_to'
    ];

    public function cachedPage(): BelongsTo
    {
        return $this->belongsTo(CachedPage::class, 'cached_page_id');
    }

    public function jobSite(): BelongsTo
    {
        return $this->belongsTo(JobSite::class);
    }

    public function llmResponses(): MorphMany
    {
        return $this->morphMany(LLMResponse::class, 'related_entity');
    }
}
