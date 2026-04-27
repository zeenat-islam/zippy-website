<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Service extends Model
{
   protected $fillable = ['title', 'slug', 'image', 'short_desc', 'tags'];
  protected $casts = [
        'tags' => 'array',
        'content_blocks' => 'array',
    ];

   protected function tags(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                // Agar data pehle se string hai toh decode karein
                $decoded = is_string($value) ? json_decode($value, true) : $value;
                
                if (empty($decoded)) return [];

                // Check karein agar data Filament Repeater format mein hai
                if (isset($decoded[0]) && is_array($decoded[0]) && isset($decoded[0]['tag_name'])) {
                    return array_column($decoded, 'tag_name');
                }

                return $decoded;
            }
        );
    }

    /**
     * Relationship: Service has one Detail
     */
    public function detail(): HasOne
    {
        // Yahan 'Detail::class' hona chahiye kyunki aapka model 'Detail' hai
        return $this->hasOne(Detail::class, 'service_id');
    }
    
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
