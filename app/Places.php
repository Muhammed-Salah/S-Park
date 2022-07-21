<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    protected $fillable = [
        'Place_name',
        'location',
        'total_slot',
    ];
    public function parking(){
        return $this->belongsToMany(
            Parking::class,
            'slots',
            'place_id',
            'vehicle_id');
    }
}
