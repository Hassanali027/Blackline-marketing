<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'short_description',
        'content',
        'image',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'author_id',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
