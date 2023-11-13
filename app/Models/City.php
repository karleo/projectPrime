<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\State;

class City extends Model
{
    use HasFactory;

    protected $primaryKey = 'city_id';
    protected $fillable = [
        'state_id',
        'name',
        'code'
    ];

    public function state(): HasOne
    {
        return $this->hasOne(State::class,'state_id','state_id');
    }

   
}
