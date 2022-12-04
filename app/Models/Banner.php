<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'value'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

}
