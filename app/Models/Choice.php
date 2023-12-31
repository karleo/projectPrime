<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;

    protected $primaryKey = "choice_id";

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
        'state',
        'arrivaldate',
        'boe',
        'tranferout',
        'quantity',
        'weight',
        'value',
        'remarks'
    ];
        
    

}
