<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class ServiceRequest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'status',
        'occupant_id',
        'urgency',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'occupant_id' => 'integer',
    ];

    public function occupant(): BelongsTo
    {
        return $this->belongsTo(Occupant::class);
    }

    public function property(): HasOneThrough
    {
        return $this->hasOneThrough(Property::class, Occupant::class);
    }
}
