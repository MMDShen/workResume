<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodParty extends Model
{
    use HasFactory;

    protected $table = "foods_party";

    protected $fillable = [
        'label',
        'factor',
        'max',
        'count'
    ];

    public function food()
    {
        return $this->hasMany(Food::class);
    }
}
