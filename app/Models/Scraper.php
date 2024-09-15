<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * 
 *
 * @property string $id
 * @property string $job_site_id
 * @property string $classname The namespace and class name of the scraper for this job site
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\JobSite $jobSites
 * @method static \Illuminate\Database\Eloquent\Builder|Scraper newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Scraper newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Scraper query()
 * @method static \Illuminate\Database\Eloquent\Builder|Scraper whereClassname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scraper whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scraper whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scraper whereJobSiteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scraper whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Scraper extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['classname'];

    public function jobSites(): BelongsTo
    {
        return $this->belongsTo(JobSite::class, 'job_site_id');
    }
}
