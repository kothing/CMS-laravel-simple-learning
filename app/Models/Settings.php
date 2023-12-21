<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_title',
        'site_tagline',
        'site_description',
        'site_keywords',
        'site_url',
        'posts_per_page',
    ];
}
