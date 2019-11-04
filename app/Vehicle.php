<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'make_model', 'fuel_type', 'price_day',
    ];
}
