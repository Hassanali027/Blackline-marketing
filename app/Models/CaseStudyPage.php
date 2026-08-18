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
        'id', 'title', 'slug', 'hero', 'challenge', 'strategy', 'work_motion', 'video',
        'meta_title', 'meta_description', 'meta_keywords'
    ];

    protected $casts = [
        'hero' => 'array',
        'challenge' => 'array',
        'strategy' => 'array',
        'work_motion' => 'array',
        'video' => 'array'
    ];
}
