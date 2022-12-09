<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Tour\StoreRequest;
use App\Services\Api\TourService;

class TourController extends Controller
{
    protected TourService $tourService;

    public function __construct()
    {
        $this->tourService = new TourService();
    }

    public function index()
    {
        return view('admin.tour.index', [
            'tours' => $this->tourService->showDescrementAll()->paginate(12)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        return $this->tourService->storeProcess($request->validated());
    }
}
