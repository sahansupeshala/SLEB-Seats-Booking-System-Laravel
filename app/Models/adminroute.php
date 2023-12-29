<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminroute extends Model
{
    use HasFactory;

    protected $fillable = [
        'depature_city', 'arrival_city','ticket_price'
    ];

    public function bus()
    {
        return $this->belongsToMany(Bus::class, 'bus_routes');
    }
}
