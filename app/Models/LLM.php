<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * 
 *
 * @property string $slug
 * @property string $name
 * @property string|null $provider
 * @property string|null $description
 * @property string|null $input_token_cost_per_million
 * @property string|null $output_token_cost_per_million
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Answer> $answers
 * @property-read int|null $answers_count
 * @method static \Illuminate\Database\Eloquent\Builder|LLM newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LLM newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LLM query()
 * @method static \Illuminate\Database\Eloquent\Builder|LLM whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLM whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLM whereInputTokenCostPerMillion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLM whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLM whereOutputTokenCostPerMillion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLM whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLM whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLM whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LLM extends Model
{
    use HasFactory;

    protected $table = 'llms';
    protected $primaryKey = 'slug';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'slug',
        'name',
        'provider',
        'description',
        'input_token_cost_per_million',
        'output_token_cost_per_million'
    ];

    public function answers(): MorphMany
    {
        return $this->morphMany(Answer::class, 'author');
    }
}
