<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CarsEquipments extends Model
{
    use HasFactory;



    public function cars(): BelongsToMany
    {
        return $this->BelongsToMany(Car::class);
    }

    public function carEquipmentGroups(): HasOne
    {
        return $this->hasOne(CarEquipmentGroups::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function carEquipments(): BelongsToMany
    {
        return $this->BelongsToMany(CarEquipments::class);
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
