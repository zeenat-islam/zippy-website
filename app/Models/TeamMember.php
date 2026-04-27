<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    

    protected $fillable = [
        'name',
        'designation',
        'description',
        'image',
        'linkedin_url',
        'twitter_url',
        'instagram_url',
    ];
}
