<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\Flysystem\Adapter\Local;

class Rezervation extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Transfer()
    {
        return $this->belongsTo(Transfer::class);
    }

    public function Location()
    {
        return $this->hasMany(Location::class);
    }

}
