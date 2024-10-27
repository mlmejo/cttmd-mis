<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    protected $fillable = [
        'region_desc',
        'province_code',
        'psgc_code',
        'city_name',
        'city_code',
    ];

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'region_desc', 'region_code');
    }

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'province_code', 'province_code');
    }

    public function barangays(): HasMany
    {
        return $this->hasMany(Barangay::class, 'city_code', 'city_code');
    }
}
