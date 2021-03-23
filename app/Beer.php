<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Beer extends Model
{
    protected $fillable = ['brand', 'beer_typology', 'nationality', 'price',
    'liters', 'image' ];

    public function getCreatedAtAttribute($value)
    {
        $date = new Carbon($value);

        $date = $date->format('d F Y');

        return $date;
    }
}
