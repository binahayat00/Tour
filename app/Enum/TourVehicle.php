<?php

namespace App\Enum;

enum TourVehicle
{
    case Floor;
    case Capacity;

    public function default(): ?string
    {
        return match($this){
            self::Floor => 1,
            self::Capacity => 1,
        };
    }
}
