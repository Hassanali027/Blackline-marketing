<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudyPage extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id', 'title', 'slug', 'hero', 'challenge', 'strategy', 'work_motion', 'video'
    ];

    protected $casts = [
        'hero' => 'array',
        'challenge' => 'array',
        'strategy' => 'array',
        'work_motion' => 'array',
        'video' => 'array'
    ];
}
