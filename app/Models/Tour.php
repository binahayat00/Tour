<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Tour extends Model  implements HasMedia
{
    use HasFactory, HasTranslations, InteractsWithMedia;

    protected $fillable = [
        'title',
        'from',
        'to',
        'description',
        'overview',
        'location',
        'general_price',
        'custom_price',
        'contract',
        'bonus',
        'sold_out',
        'come',
        'user_id',
    ];

    public $translatable = [
        'title',
        'description',
        'overview',
        'include',
        'exclude',
        'contract',
    ];

    /**
     * @return HasMany
     */

    public function tourVehicle(): HasMany
    {
        return $this->hasMany(TourVehicle::class,'tour_id');
    }
}
