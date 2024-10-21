<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
    $employees = Employee::with(['details.city'])->get()->map(function ($employee) {
        return [
            'name' => $employee->name,
            'email' => $employee->email,
            'mob_no' => $employee->mob_no,
            'address' => optional($employee->details)->address ?? 'Null', 
            'city_name' => optional(optional($employee->details)->city)->name ?? 'Null', 
        ];
    });
    return view('employees.index', compact('employees'));

    }
}
