<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 
 *
 * @property string $id
 * @property string|null $company_id
 * @property string $type
 * @property string $name
 * @property string $slug
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CachedPage> $cachedPages
 * @property-read int|null $cached_pages_count
 * @property-read \App\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Job> $jobs
 * @property-read int|null $jobs_count
 * @method static \Illuminate\Database\Eloquent\Builder|JobSite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobSite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobSite query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobSite whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobSite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobSite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobSite whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobSite whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobSite whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobSite whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobSite whereUrl($value)
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|JobSite onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|JobSite whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobSite withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|JobSite withoutTrashed()
 * @mixin \Eloquent
 */
class JobSite extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = ['company_id', 'type', 'name', 'url'];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function cachedPages(): HasMany
    {
        return $this->hasMany(CachedPage::class);
    }

    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }
}
