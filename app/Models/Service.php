<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id', 'title', 'slug', 'hero', 'overview', 'benefits_header', 'benefits',
        'process_header', 'process', 'pricing_header', 'pricing',
        'meta_title', 'meta_description', 'meta_keywords'
    ];

    protected $casts = [
        'hero' => 'array',
        'overview' => 'array',
        'benefits_header' => 'array',
        'benefits' => 'array',
        'process_header' => 'array',
        'process' => 'array',
        'pricing_header' => 'array',
        'pricing' => 'array'
    ];
}
