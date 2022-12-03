<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'address',
        'longitude',
        'latitude',
        'restaurant_type',
        'is_open',
        'score',
        'user_id'
    ];

}
