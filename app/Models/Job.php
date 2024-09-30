<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 *
 * @property string $id
 * @property string $cached_page_id
 * @property string $job_site_id
 * @property string $city_id
 * @property string $original_url
 * @property string $direct_link
 * @property \Illuminate\Support\Carbon|null $post_date
 * @property bool $requires_work_permit
 * @property string|null $work_permit_country_code
 * @property bool $is_remote
 * @property bool $is_hybrid
 * @property int|null $days_in_office_per_week
 * @property string $original_description
 * @property string $llm_summary
 * @property string|null $salary_from
 * @property string|null $salary_to
 * @property string|null $salary_currency
 * @property string|null $salary_in_usd_from
 * @property string|null $salary_in_usd_to
 * @property string|null $timezone_from
 * @property string|null $timezone_to
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CachedPage $cachedPage
 * @property-read \App\Models\City $cities
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $emailedToUsers
 * @property-read int|null $emailed_to_users_count
 * @property-read \App\Models\JobSite $jobSite
 * @property-read \App\Models\Currency|null $salaryCurrency
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Skill> $skills
 * @property-read int|null $skills_count
 * @property-read \App\Models\Country|null $workPermitCountry
 * @method static \Illuminate\Database\Eloquent\Builder|Job newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job query()
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereCachedPageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereDaysInOfficePerWeek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereIsHybrid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereIsRemote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereJobSiteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereLlmSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereOriginalDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereOriginalUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereRequiresWorkPermit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereSalaryCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereSalaryFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereSalaryInUsdFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereSalaryInUsdTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereSalaryTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereTimezoneFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereTimezoneTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereWorkPermitCountryCode($value)
 * @property string|null $original_description_html
 * @property string|null $original_description_text
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Job onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereDirectLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereOriginalDescriptionHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereOriginalDescriptionText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job wherePostDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Job withoutTrashed()
 * @property string|null $made_visible_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LLMResponse> $llmResponses
 * @property-read int|null $llm_responses_count
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereMadeVisibleAt($value)
 * @mixin \Eloquent
 */
class Job extends Model
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

    public function cities(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id');
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

    public function llmResponses(): MorphMany
    {
        return $this->morphMany(LLMResponse::class, 'related_entity');
    }
}
