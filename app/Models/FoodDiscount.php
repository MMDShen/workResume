<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodDiscount extends Model
{
    use HasFactory;

    protected $table = "foods_discount";

    protected $fillable = [
        'label',
        'factor'
    ];
}
