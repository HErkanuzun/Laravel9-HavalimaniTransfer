<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory; 

    # many to one
    public function Rezervation()
    {
        return $this->belongsTo(Rezervation::class);
    }
}
