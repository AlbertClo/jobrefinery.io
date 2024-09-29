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
 * @property string $name
 * @property string $description
 * @property string $company
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|LLM newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LLM newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LLM query()
 * @method static \Illuminate\Database\Eloquent\Builder|LLM whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLM whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLM whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLM whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLM whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLM whereUpdatedAt($value)
 * @property string $prompt
 * @property string $prompt_timestamp
 * @property string $response
 * @property string $response_timestamp
 * @property \App\Models\LLM|null $llm
 * @property int $input_tokens
 * @property int $output_tokens
 * @property string $cost
 * @property string|null $related_entity_id
 * @property string|null $related_entity_type
 * @property-read Model|\Eloquent|null $relatedEntity
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse whereInputTokens($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse whereLlm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse whereOutputTokens($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse wherePrompt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse wherePromptTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse whereRelatedEntityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse whereRelatedEntityType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse whereResponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse whereResponseTimestamp($value)
 * @mixin \Eloquent
 */
class LLMResponse extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'llm_responses';

    public $timestamps = false;

    protected $fillable = [
        'prompt',
        'prompt_timestamp',
        'response',
        'response_timestamp',
        'llm',
        'input_tokens',
        'output_tokens',
        'cost',
        'related_entity_id',
        'related_entity_type',
    ];

    public function llm(): BelongsTo
    {
        return $this->belongsTo(LLM::class, 'llm', 'slug');
    }

    public function relatedEntity(): MorphTo
    {
        return $this->morphTo();
    }
}
