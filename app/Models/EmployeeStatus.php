<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeStatus extends Model
{
    use HasFactory;
    protected $primarykey = "employeestatus_id";

    protected $fillable = [
        'code',
        'gender'
    ];
}
