<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClearanceController;

Route::get('/', [ClearanceController::class, 'create'])->name('clearance.form');
Route::post('/submit-clearance', [ClearanceController::class, 'store'])->name('clearance.submit');
