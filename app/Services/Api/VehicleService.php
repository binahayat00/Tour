<?php

namespace App\Services\Api;

use App\Models\Vehicle;

/**
 * Class VehicleService
 * @package App\Services
 */
class VehicleService
{
    public function store(array $data): ?Vehicle
    {
        return Vehicle::create($data);
    }
}
