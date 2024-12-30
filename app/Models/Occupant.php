<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Occupant extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'room_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'room_id' => 'integer',
    ];

    public function leases(): HasMany
    {
        return $this->hasMany(Lease::class);
    }

    public function docuemnts(): MorphMany
    {
        return $this->morphMany(Document::class, 'owner');
    }

    public function photos(): MorphMany
    {
        return $this->morphMany(Photo::class, 'owner');
    }
}
