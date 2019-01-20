<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'color', 'km', 'model', 'numberChasis', 'numberMotor', 'plate', 'soat', 'soatName', 'tradeMark', 'type', 'year', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'driverId',
    ];
}
