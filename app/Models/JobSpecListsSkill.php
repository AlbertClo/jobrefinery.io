<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * 
 *
 * @property string $job_spec_id
 * @property string $skill_id
 * @property string $skill_importance
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\JobSpec $jobSpec
 * @property-read \App\Models\Skill $skill
 * @method static \Illuminate\Database\Eloquent\Builder|JobListsSkill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobListsSkill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobListsSkill query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobListsSkill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobListsSkill whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobListsSkill whereSkillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobListsSkill whereSkillImportance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobListsSkill whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobSpecListsSkill whereJobSpecId($value)
 * @property-read \App\Models\JobSpec|null $job
 * @mixin \Eloquent
 */
class JobSpecListsSkill extends Pivot
{
    protected $table = 'job_spec_lists_skills';

    protected $fillable = [
        'job_id',
        'skill_id',
        'skill_importance'
    ];

    public function job(): BelongsTo
    {
        return $this->belongsTo(JobSpec::class);
    }

    public function skill(): BelongsTo
    {
        return $this->belongsTo(Skill::class);
    }
}