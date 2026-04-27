<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
   protected $fillable = [
    'title', 'slug', 'image', 'date', 'read_time',
    'badge_title', 'main_heading', 'description',
    'content_blocks',
     'cta_heading',      
    'cta_description',  
    'cta_image',        
];

protected $casts = [
    'content_blocks' => 'array',
];
    public function detail()
    {
        return $this->hasOne(BlogDetail::class);
    }
}