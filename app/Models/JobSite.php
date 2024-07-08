<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobSite extends Model
{
    use HasFactory, HasUuids, HasUuids;

    protected $fillable = ['scraper_id', 'type', 'name', 'url'];

    public function scraper(): BelongsTo
    {
        return $this->belongsTo(Scraper::class);
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
