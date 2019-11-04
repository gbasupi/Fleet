<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
   protected $fillable = ['make_model', 'fuel_type', 'price_day'];
}
