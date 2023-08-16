<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pethotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'city',
        'address',
        'phones',
        'email',
        'coordsGPS',
        'siteURL',
        'rating',
        'dog',
        'cat',
        'price',
        'freeDates',
        'feeding',
        'walks',
        'bathing',
        'nailCutting',
        'transportation',
    ];
}
