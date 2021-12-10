<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Song extends Model
{
    use HasFactory;

    protected $appends = ['cover', 'source', 'favorited'];

    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function getCoverAttribute()
    {
        return Storage::disk('public')->url($this->image);
    }

    public function getSourceAttribute()
    {
        return Storage::disk('public')->url($this->file);
    }

    public function getFavoritedAttribute()
    {
        return false;
    }
}
