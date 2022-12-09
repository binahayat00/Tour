<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Tour\StoreRequest;
use App\Services\Api\TourService;

class TourController extends Controller
{
    /**
     * Summary of tourService
     * @var App\Services\Api\TourService
     */
    protected TourService $tourService;

    /**
     * Summary of __construct
     */
    public function __construct()
    {
        $this->tourService = new TourService();
    }

    /**
     * Summary of index
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(
            $this->tourService->showDescrementAll()
        );
    }

    /**
     * 
     * @param StoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreRequest $request)
    {
        return response()->json(
            $this->tourService->storeProcess($request->validated())
        );
    }
}