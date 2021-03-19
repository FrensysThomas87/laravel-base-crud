<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = ['brand', 'beer_typology', 'nationality', 'price',
    'liters', 'image' ];
}
