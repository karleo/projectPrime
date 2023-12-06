<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class City extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'city_id';

    protected $fillable = ['state_id', 'name', 'code', 'postal_code'];

    public function state(): HasOne
    {
        return $this->hasOne(State::class,'state_id','state_id');
    }
}
