<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogDetail extends Model
{
    protected $fillable = [
        'blog_id',
        'content_blocks',
    ];

    protected $casts = [
        'content_blocks' => 'array',  // ← yeh add karo
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}