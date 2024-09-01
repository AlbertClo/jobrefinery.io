<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @property string $job_id
 * @property string $user_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property-read \App\Models\Job $job
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|JobEmailedToUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobEmailedToUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobEmailedToUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobEmailedToUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobEmailedToUser whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobEmailedToUser whereUserId($value)
 * @mixin \Eloquent
 */
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
