<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'raw_material',
        'image',
        'price',
        'food_type',
        'food_discount_id',
        'food_party_id',
        'restaurant_id'
    ];

}
