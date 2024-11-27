<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use HasFactory;

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function carBrand(): BelongsTo
    {
        return $this->belongsTo(CarBrand::class);
    }

    public function carModel(): BelongsTo
    {
        return $this->belongsTo(CarModel::class);
    }

    public function carEngine(): BelongsTo
    {
        return $this->BelongsTo(CarEngine::class);
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function carequipmentgroups(): BelongsTo
    {
        return $this->belongsTo(CarEquipmentGroups::class);
    }

    public function carequipments(): BelongsToMany
    {
        return $this->BelongsToMany(CarEquipments::class, 'cars_equipments', 'car_id', 'car_equipments_id');
    }

    public function carsequipments(): BelongsToMany
    {
        return $this->BelongsToMany(CarsEquipments::class, 'cars_equipments', 'car_id', 'car_equipments_id');
    }

    public function carPhotos()
    {
        return $this->hasMany(CarPhoto::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function requests()
    {
        return $this->hasMany(CarRequest::class);
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
