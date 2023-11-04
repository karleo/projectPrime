<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;

    protected $primarykey = "designation_id";

    protected $fillable = [
        'name',
        'code'
    ];
}
