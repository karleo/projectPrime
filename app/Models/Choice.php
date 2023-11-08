<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;

    protected $primarykey = "choice_id";

    protected $fillable = [
        'booking',
        'job',
        'invoice',
        'awb',
        'pieces',
        'ab',
        'reciever',
        'location',
        'status',
        'trucks',
        'states',
        'arrivaldate',
        'boe',
        'tranferout',
        'quantity',
        'weight',
        'value',
        'remarks'
    ];
        
    

}
