<?php

namespace App\Models;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 *
 *
 * @property string $id
 * @property string $prompt
 * @property string $prompt_timestamp
 * @property string|null $response
 * @property float|null $temperature
 * @property string|null $response_timestamp
 * @property string|null $llm
 * @property int|null $input_tokens
 * @property int|null $output_tokens
 * @property string|null $cost
 * @property string|null $related_entity_id
 * @property string|null $related_entity_type
 * @property-read Model|\Eloquent|null $relatedEntity
 * @property-read \App\Models\LLM|null $relatedLLM
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse query()
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse whereInputTokens($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse whereLlm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse whereOutputTokens($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse wherePrompt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse wherePromptTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse whereRelatedEntityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse whereRelatedEntityType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse whereResponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLMResponse whereResponseTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LLMResponse whereTemperature($value)
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
        'temperature',
    ];

    public function LLM(): BelongsTo
    {
        return $this->belongsTo(LLM::class, 'llm', 'slug');
    }

    public function relatedEntity(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'related_entity_type', 'related_entity_id');
    }

    public function consoleSummary(Command $command): void
    {
        $command->info("LLM: {$this->llm}\n");
        $command->info("Response:\n{$this->response}\n");
        $command->info("Input tokens: {$this->input_tokens}\n");
        $command->info("Output tokens: {$this->output_tokens}\n");
    }
}
