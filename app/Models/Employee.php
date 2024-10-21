<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    public function details()
    {
        return $this->hasOne(EmployeeDetails::class, 'employee_id');
    }
}
