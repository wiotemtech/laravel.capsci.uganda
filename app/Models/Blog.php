<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'published', 
    ];

    // 
    protected $appends = ['published_formatted'];

    public function getPublishedFormattedAttribute()
    {
        return $this->published
            ? Carbon::parse($this->published)->toDateString()
            : null;
    }
}
