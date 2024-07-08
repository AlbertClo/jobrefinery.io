<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function jobSite()
    {
        return $this->belongsTo(JobSite::class);
    }

    public function parent()
    {
        return $this->belongsTo(CachedPage::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(CachedPage::class, 'parent_id');
    }

    public function job()
    {
        return $this->hasOne(Job::class);
    }
}
