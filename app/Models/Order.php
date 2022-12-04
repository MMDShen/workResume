<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'location',
        'about_me',
    ];

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
