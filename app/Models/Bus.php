<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->belongsTo(User::class, 'foreign_key');
    }

    

    protected $fillable = [
        'Owner_name', 'bus_no','Route_permite_no'
    ];

    public function route()
    {
        return $this->belongsToMany(adminroute::class, 'bus_routes');
    }
    public function schedule()
    {
        return $this->hasMany(Routeshedule::class);
    }
}
