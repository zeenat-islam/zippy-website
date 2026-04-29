<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class   Detail extends Model
{
   protected $table = 'service_details'; 

   protected $fillable = [
    'service_id',
    'content_blocks',
    'hero_title',
];

    protected $casts = [
        'content_blocks' => 'array',
    ];

    /**
     * Relationship: Detail belongs to a Service
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}