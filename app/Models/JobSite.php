<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobSite extends Model
{
    use HasFactory, HasUuids;

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
