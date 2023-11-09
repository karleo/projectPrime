<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeStatus extends Model
{
    use HasFactory;

    protected $primaryKey = "employee_statuses_id";

    protected $fillable =[
            'name',
            'code'
    ];
}
