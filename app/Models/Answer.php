<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Answer extends Model
{
    use HasFactory, HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'question_id',
        'job_id',
        'author_id',
        'author_type',
        'answer'
    ];

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function rawJob(): BelongsTo
    {
        return $this->belongsTo(RawJob::class);
    }

    public function author(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'author_type', 'author_id');
    }
}
