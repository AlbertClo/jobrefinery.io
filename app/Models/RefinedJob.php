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
 * @property string|null $city_id
 * @property string|null $company_id
 * @property string|null $original_url
 * @property string|null $direct_link
 * @property string|null $post_date
 * @property string|null $heading
 * @property bool|null $requires_work_permit
 * @property string|null $work_permit_country_code
 * @property bool|null $is_remote
 * @property bool|null $is_hybrid
 * @property int|null $days_in_office_per_week
 * @property string|null $original_description_html
 * @property string|null $original_description_text
 * @property string|null $llm_summary
 * @property string|null $salary_from
 * @property string|null $salary_to
 * @property string|null $salary_currency
 * @property string|null $salary_in_usd_from
 * @property string|null $salary_in_usd_to
 * @property string|null $timezone_from
 * @property string|null $timezone_to
 * @property string|null $made_visible_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CachedPage $cachedPage
 * @property-read \App\Models\City|null $cities
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $emailedToUsers
 * @property-read int|null $emailed_to_users_count
 * @property-read \App\Models\JobSite $jobSite
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LLMResponse> $llmResponses
 * @property-read int|null $llm_responses_count
 * @property-read \App\Models\Currency|null $salaryCurrency
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Skill> $skills
 * @property-read int|null $skills_count
 * @property-read \App\Models\Country|null $workPermitCountry
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob query()
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereCachedPageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereDaysInOfficePerWeek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereDirectLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereIsHybrid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereIsRemote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereJobSiteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereLlmSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereMadeVisibleAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereOriginalDescriptionHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereOriginalDescriptionText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereOriginalUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob wherePostDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereRequiresWorkPermit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereSalaryCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereSalaryFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereSalaryInUsdFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereSalaryInUsdTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereSalaryTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereTimezoneFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereTimezoneTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob whereWorkPermitCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|RefinedJob withoutTrashed()
 * @mixin \Eloquent
 */
class RefinedJob extends Model
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
