<?php

namespace App\Services\Api;

use App\Models\Tour;
use App\Models\TourVehicle;
use App\Models\Vehicle;

/**
 * Class TourVehicleService
 * @package App\Services
 */
class TourVehicleService
{
    public function store(array $data, Tour $tour, Vehicle $vehicle)
    {
        return TourVehicle::create([
            'tour_id' => $tour->id,
            'vehicle_id' => $vehicle->id,
            'floor' => $data['floor'] ?? 1,
            'capacity' => $data['capacity'] ?? 1,
        ]);
    }
}
