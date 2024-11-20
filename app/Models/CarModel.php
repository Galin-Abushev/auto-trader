<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CarModel extends Model
{
    use HasFactory;

    public function carBrand(): HasOne
    {
        return $this->hasOne(CarBrand::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }


    public static $statusLabels = [
        0 => 'Изчакващ',
        1 => 'Активен',
        2 => 'Неактивен'
    ];

    // Accessor to get the status as a word
    public function getStatusLabelAttribute()
    {
        return self::$statusLabels[$this->status] ?? 'Unknown';
    }


}
