<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'amount',
        'type',
        'notes',
        'is_paid',
        'invoice_date',
        'paid_date',
        'occupant_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'amount' => 'decimal:2',
        'is_paid' => 'boolean',
        'invoice_date' => 'datetime',
        'paid_date' => 'datetime',
        'occupant_id' => 'integer',
    ];

    public function occupant(): BelongsTo
    {
        return $this->belongsTo(Occupant::class);
    }
}
