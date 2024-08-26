<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        return $this->hasMany(Job::class, 'cached_page_id');
    }
}
