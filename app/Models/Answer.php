<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;


/**
 *
 *
 * @property string $id
 * @property string $question_id
 * @property string $raw_job_id
 * @property string $llm_response_id
 * @property float|null $temperature
 * @property string $author_id
 * @property string $author_type
 * @property string $answer
 * @property string|null $refined_answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|\Eloquent $author
 * @property-read \App\Models\Question $question
 * @property-read \App\Models\RawJob $rawJob
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Answer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Answer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Answer query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Answer whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Answer whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Answer whereAuthorType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Answer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Answer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Answer whereLlmResponseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Answer whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Answer whereRawJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Answer whereRefinedAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Answer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Answer whereTemperature($value)
 * @mixin \Eloquent
 */
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

    protected $casts = [
        'answer' => 'array',
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
