<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transfer extends Model
{
    use HasFactory;

    public function Comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Rezervation()
    {
        return $this->hasMany(Rezervation::class);
    }

    public function Image()
    {
        return $this->hasMany(Image::class);
    }
}
