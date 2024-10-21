<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeDetails extends Model

{
    protected $table = 'employee_details';
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

}
