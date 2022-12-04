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

    public function food()
    {
        return $this->hasMany(Food::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function restaurantType()
    {
        return $this->belongsTo(RestaurantType::class,'restaurant_type','type');
    }

}
