<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Employee extends Model
{
    use HasFactory;

    protected $primaryKey = 'employeee_id';

    protected $fillable = ['first_name', 'middle_name', 'last_name', 'gender_id', 'department_id', 'birth_date' ];

    public function gender(): HasOne
    {
        return $this->hasOne(Gender::class, 'gender_id', 'gender_id');
    }

    public function department(): HasOne
    {
        return $this->hasOne(Department::class,'department_id','department_id');
    }

}
