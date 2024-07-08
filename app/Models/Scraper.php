<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Scraper extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['classname'];

    public function jobSites(): HasMany
    {
        return $this->hasMany(JobSite::class);
    }
}
