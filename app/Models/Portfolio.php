<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = ['title', 'category_1', 'category_2', 'image', 'description', 'rating', 'project_url'];
}
