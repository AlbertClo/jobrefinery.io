<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['name', 'type'];

    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Job::class, 'job_lists_skills')
            ->withPivot('skill_importance')
            ->withTimestamps();
    }
}
