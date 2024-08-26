<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'cached_page_id',
        'job_site_id',
        'original_url',
        'requires_work_permit',
        'work_permit_country_code',
        'original_description',
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

    public function workPermitCountry(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'work_permit_country_code', 'code');
    }

    public function salaryCurrency(): BelongsTo
    {
        return $this->belongsTo(Currency::class, 'salary_currency', 'code');
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'job_lists_skills')
            ->withPivot('skill_importance')
            ->withTimestamps();
    }

    public function emailedToUsers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'job_emailed_to_user')->withTimestamps();
    }
}
