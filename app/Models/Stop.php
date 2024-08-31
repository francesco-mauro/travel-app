<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    use HasFactory;

    protected $fillable = ['day_id', 'title', 'description', 'image_url', 'location', 'notes', 'rating'];

    public function day()
    {
        return $this->belongsTo(Day::class);
    }
}
