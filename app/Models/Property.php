<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Property extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'about',
        'address',
        'num_of_baths',
        'organization_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'num_of_baths' => 'float',
        'organization_id' => 'integer',
    ];

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function documents(): MorphMany
    {
        return $this->morphMany(Document::class, 'owner');
    }

    public function photos(): MorphMany
    {
        return $this->morphMany(Photo::class, 'owner');
    }

    public function applicants(): BelongsToMany
    {
        return $this->belongsToMany(Applicant::class);
    }
}
