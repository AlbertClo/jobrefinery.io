<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class JobEmailedToUser extends Pivot
{
    protected $table = 'job_emailed_to_user';

    public $timestamps = false;

    protected $fillable = [
        'job_id',
        'user_id'
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
