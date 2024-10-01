<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * 
 *
 * @property string $id
 * @property string $job_site_id
 * @property string|null $parent_id
 * @property string $url_full
 * @property string $url_origin
 * @property string $url_pathname
 * @property array|null $query_params
 * @property string $document
 * @property \Illuminate\Support\Carbon $created_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, CachedPage> $children
 * @property-read int|null $children_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Job> $job
 * @property-read int|null $job_count
 * @property-read \App\Models\JobSite $jobSite
 * @property-read CachedPage|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|CachedPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CachedPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CachedPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|CachedPage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CachedPage whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CachedPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CachedPage whereJobSiteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CachedPage whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CachedPage whereQueryParams($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CachedPage whereUrlFull($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CachedPage whereUrlOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CachedPage whereUrlPathname($value)
 * @mixin \Eloquent
 */
class CachedPage extends Model
{
    use HasFactory, HasUuids;

    public $timestamps = false;

    protected $fillable = [
        'job_site_id',
        'parent_id',
        'url_full',
        'url_origin',
        'url_pathname',
        'query_params',
        'document'
    ];

    protected $casts = [
        'query_params' => 'array',
        'created_at' => 'datetime',
    ];

    public function jobSite(): BelongsTo
    {
        return $this->belongsTo(JobSite::class);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(CachedPage::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(CachedPage::class, 'parent_id');
    }

    public function job(): HasMany
    {
        return $this->hasMany(JobSpec::class, 'cached_page_id');
    }
}
