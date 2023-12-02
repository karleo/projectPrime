<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class State extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'state_id';

    protected $fillable = ['country_id','name'];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id','country_id');
    }
}
