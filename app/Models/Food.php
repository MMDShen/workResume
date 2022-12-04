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

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    public function Comment()
    {
        return $this->hasMany(Comment::class);
    }
    public function foodType()
    {
        return $this->belongsTo(FoodType::class,'food_type','type');
    }
    public function foodDiscunt()
    {
        return $this->belongsTo(FoodDiscount::class);
    }
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
    public function foodParty()
    {
        return $this->belongsTo(FoodParty::class);
    }
}
