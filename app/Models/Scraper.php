<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Scraper extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['classname'];

    public function jobSites(): BelongsTo
    {
        return $this->belongsTo(JobSite::class, 'job_site_id');
    }
}
