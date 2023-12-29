<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    public function schedule()
    {
        return $this->belongsTo(Routeshedule::class);
    }

    public function passenger()
    {
        return $this->belongsTo(passenger::class);
    }
}
