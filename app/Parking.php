<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    protected $fillable = [
        'car_no',
        'title',
        'vehicle_type',
    ];
    public function places(){
        return $this->belongsToMany(
            Places::class,
            'slots',
            'vehicle_id',
            'place_id');
    }
}
