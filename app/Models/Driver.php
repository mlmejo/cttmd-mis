<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'license_id',
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'barangay_id',
        'street_address',
        'gender',
    ];

    public function license(): BelongsTo
    {
        return $this->belongsTo(DriverLicense::class, 'license_id', 'id');
    }

    public function barangay(): BelongsTo
    {
        return $this->belongsTo(Barangay::class);
    }
}
