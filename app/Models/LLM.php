<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LLM extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'llms';

    protected $fillable = ['name', 'description', 'company'];
}
