<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routeshedule extends Model
{
    use HasFactory;
       public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function seat()
    {
        return $this->hasMany(Seat::class);
    }
}
