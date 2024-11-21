<?php

namespace App\Policies;

use App\Models\Car;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CarPolicy
{
    public function edit(User $user, Car $car): bool
    {
        return $car->employer->user->is($user);
    }
}
