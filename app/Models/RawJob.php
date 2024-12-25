<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 *
 * @property string $id
 * @property string $cached_page_id
 * @property string $job_site_id
 * @property string|null $original_url
 * @property string|null $direct_link
 * @property string|null $post_date
 * @property string|null $original_description_html
 * @property string|null $original_description_text
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CachedPage $cachedPage
 * @property-read \App\Models\JobSite $jobSite
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LLMResponse> $llmResponses
 * @property-read int|null $llm_responses_count
 * @method static \Illuminate\Database\Eloquent\Builder|RawJob newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RawJob newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RawJob onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|RawJob query()
 * @method static \Illuminate\Database\Eloquent\Builder|RawJob whereCachedPageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RawJob whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RawJob whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RawJob whereDirectLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RawJob whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RawJob whereJobSiteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RawJob whereOriginalDescriptionHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RawJob whereOriginalDescriptionText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RawJob whereOriginalUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RawJob wherePostDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RawJob whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RawJob withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|RawJob withoutTrashed()
 * @mixin \Eloquent
 */
class RawJob extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'cached_page_id',
        'job_site_id',
        'original_url',
        'direct_link',
        'post_date',
        'original_description_html',
        'original_description_text',
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

    public function refinedJob(): HasMany
    {
        return $this->hasMany(RefinedJob::class, 'raw_job_id');
    }

    public function answerAnalyticsSummaries(): HasMany
    {
        return $this->hasMany(AnswerAnalyticsSummary::class);
    }
}
