<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $primarykey = "states_id";

    protected $fillable =[
        'name',
        'code',
        'country_id',
        
    ];
}
