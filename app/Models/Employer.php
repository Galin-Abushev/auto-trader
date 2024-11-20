<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employer extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }

    public function carequipmentgroups(): HasMany
    {
        return $this->hasMany(carequipmentgroups::class);
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
