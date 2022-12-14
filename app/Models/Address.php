<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = "addresses";

    protected $fillable = [
        'title',
        'address',
        'longitude',
        'latitude',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function restaurant()
    {
        return $this->hasOne(Restaurant::class,'user_id','id');
    }

}
