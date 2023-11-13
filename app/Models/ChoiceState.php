<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChoiceState extends Model
{
    use HasFactory;

    protected $primaryKey = 'choice_state_id';

    protected $fillable = [
        'name',
        'code'
    ];
}
