<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChoiceShipmentType extends Model
{
    use HasFactory;
    protected $primaryKey = 'choice_shipment_type_id';
    protected $fillable = [
        'name'
    ];
    
}
