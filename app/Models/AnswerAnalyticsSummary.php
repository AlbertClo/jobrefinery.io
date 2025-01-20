<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * 
 *
 * @property string $id
 * @property string $question_id
 * @property string|null $answer_1
 * @property int|null $answer_1_count
 * @property float|null $answer_1_percentage
 * @property string|null $answer_2
 * @property int|null $answer_2_count
 * @property float|null $answer_2_percentage
 * @property string|null $answer_3
 * @property int|null $answer_3_count
 * @property float|null $answer_3_percentage
 * @property array|null $data
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $related_entity_id
 * @property string|null $related_entity_type
 * @property-read \App\Models\Question $question
 * @property-read Model|\Eloquent|null $relatedEntity
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary whereAnswer1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary whereAnswer1Count($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary whereAnswer1Percentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary whereAnswer2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary whereAnswer2Count($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary whereAnswer2Percentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary whereAnswer3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary whereAnswer3Count($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary whereAnswer3Percentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary whereRelatedEntityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary whereRelatedEntityType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnswerAnalyticsSummary whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AnswerAnalyticsSummary extends Model
{
    use HasUuids;

    protected $table = 'answer_analytics_summaries';

    protected $fillable = [
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

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function relatedEntity(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'related_entity_type', 'related_entity_id');
    }
}
