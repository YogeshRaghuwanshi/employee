<?php

use App\Http\Controllers\EmployeeController;


Route::get('/', [EmployeeController::class, 'index'])->name('home');


// Route::get('/employees', [EmployeeController::class, 'index']);

