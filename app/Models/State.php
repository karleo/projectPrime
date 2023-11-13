<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Country;
 

class State extends Model
{
    use HasFactory;

    protected $primaryKey = 'state_id';

    protected $fillable = [
        'country_id',
        'name',
        'code'
    ];

    public function country(): HasOne
    {
        return $this->hasOne(Country::class,'country_id','country_id');
    }

}
