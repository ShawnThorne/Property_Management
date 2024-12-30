<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Lease extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'start_date',
        'end_date',
        'price_month',
        'deposit',
        'occupant_id',
        'property_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'price_month' => 'decimal:2',
        'deposit' => 'decimal:2',
        'occupant_id' => 'integer',
        'property_id' => 'integer',
    ];

    public function occupant(): BelongsTo
    {
        return $this->belongsTo(Occupant::class);
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    public function documents(): MorphMany
    {
        return $this->morphMany(Document::class, 'owner');
    }
}
