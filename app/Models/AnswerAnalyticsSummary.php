<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * 
 *
 * @property-read \App\Models\Question|null $question
 * @property-read \App\Models\RawJob|null $rawJob
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary query()
 * @mixin \Eloquent
 */
class AnswerAnalyticsSummary extends Model
{
    use HasUuids;

    protected $table = 'answer_analytics_summaries';

    protected $fillable = [
        'raw_job_id',
        'question_id',
        'answer_1',
        'answer_1_count',
        'answer_1_percentage',
        'answer_2',
        'answer_2_count',
        'answer_2_percentage',
        'answer_3',
        'answer_3_count',
        'answer_3_percentage',
        'data',
    ];

    protected $casts = [
        'answer_1_count' => 'integer',
        'answer_1_percentage' => 'float',
        'answer_2_count' => 'integer',
        'answer_2_percentage' => 'float',
        'answer_3_count' => 'integer',
        'answer_3_percentage' => 'float',
        'data' => 'array',
    ];

    public function rawJob(): BelongsTo
    {
        return $this->belongsTo(RawJob::class);
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}
