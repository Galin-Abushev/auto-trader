<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarPhoto extends Model
{
    use HasFactory;

    public $maxPhotos = 12;

    public function car()
    {
        return $this->belongsTo(Car::class);
    }



}
