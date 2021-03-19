<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = ['brand', 'beer-typology', 'nationality', 'price',
    'liters', 'image' ];
}
