<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 * @property int $slug
 * @property string|null $provider
 * @property string|null $input_token_cost_per_million
 * @property string|null $output_token_cost_per_million
 * @method static \Illuminate\Database\Eloquent\Builder|LLM whereInputTokenCostPerMillion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLM whereOutputTokenCostPerMillion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLM whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LLM whereSlug($value)
 * @mixin \Eloquent
 */
class LLM extends Model
{
    use HasFactory;

    protected $table = 'llms';

    protected $primaryKey = 'slug';

    protected $fillable = [
        'slug',
        'name',
        'provider',
        'description',
        'input_token_cost_per_million',
        'output_token_cost_per_million'
    ];
}
