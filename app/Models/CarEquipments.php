<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CarEquipments extends Model
{
    use HasFactory;

    public function cars(): BelongsToMany
    {
        return $this->BelongsToMany(Car::class, 'cars_equipments', 'car_equipments_id', 'car_id');
    }

    public function carEquipmentGroups(): HasOne
    {
        return $this->hasOne(CarEquipmentGroups::class);
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
