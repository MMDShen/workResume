<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantType extends Model
{
    use HasFactory;

    protected $table = "restaurants_type";

    protected $fillable = [
        'type'
    ];
    public function restaurant()
    {
        return $this->hasMany(Restaurant::class);
    }
}
