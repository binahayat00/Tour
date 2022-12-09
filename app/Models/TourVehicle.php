<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TourVehicle extends Model
{
    use HasFactory;
    public $table = 'tour_vehicle';

    protected $fillable = [
        'tour_id',
        'vehicle_id',
        'floor',
        'capacity',
        'general_price',
        'custom_price',
        'currency',
        'discount',
    ];

    /**
     * @return BelongsTo
     */

    public function tour(): BelongsTo
    {
        return $this->BelongsTo(Tour1::class,'tour_id');
    }
}
