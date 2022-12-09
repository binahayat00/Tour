<?php

namespace App\Services\Api;

use App\Models\Tour;
use Spatie\Image\Image;

/**
 * Class TourService
 * @package App\Services
 */
class TourService
{
    protected Tour $tour;
    protected TourVehicleService $tourVehicleService;
    protected VehicleService $vehicleService;

    public function __construct()
    {
        $this->tour = new Tour();
        $this->tourVehicleService = new TourVehicleService();
        $this->vehicleService = new VehicleService();
    }
    public function storeProcess(array $data)//: ?Tour
    {
        return $this->store($data);
        $this->tour->addMedia($data['cover'])->toMediaCollection('cover');
        if ($data['images'] != null) {
            foreach ($data['images'] as $image) {
                Image::load($image->getPathName())
                    ->quality(60)
                    ->save();
                $this->tour
                    ->addMedia($image)
                    ->toMediaCollection('images');
            }
        }
        if ($data['vehicles'] != null) {
            foreach ($data['vehicles'] as $vehicles) {
                $vehicle = $this->vehicleService->store($vehicles);
                if ($vehicles['floors'] != null) {
                    foreach ($vehicles['floors'] as $floors) {
                        $this->tourVehicleService->store($floors, $this->tour, $vehicle);
                    }
                }
            }
        }

        return $this->tour;
    }

    public function store(array $data): ?bool
    {
        $this->tour['title'] = $data['title'];
        $this->tour['description'] = $data['description'];
        $this->tour['overview'] = $data['overview'];
        $this->tour['contract'] = $data['contract'];
        $this->tour->setTranslations('title', $data['title']);
        $this->tour->setTranslations('description', $data['description']);
        $this->tour->setTranslations('overview', $data['overview']);
        $this->tour->setTranslations('contract', $data['contract']);
        $this->tour['from'] = $data['from'];
        $this->tour['to'] = $data['to'];
        $this->tour['sold_out'] = $data['sold_out'];
        $this->tour['come'] = $data['come'];
        $this->tour['location'] = $data['location'];
        $this->tour['general_price'] = $data['general_price'];
        $this->tour['custom_price'] = $data['custom_price'];
        $this->tour['bonus'] = $data['bonus'];
        $this->tour['user_id'] = $data['user_id'];
        return $this->tour->save();

    }

    public function showDescrementAll()
    {
        return Tour::orderBy('id', 'desc');
    }
}
