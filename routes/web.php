<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('index');
});

Route::get('/properties', [PropertyController::class, 'getAllProperties']);
Route::get('/property/{id}', [PropertyController::class, 'getProperty']);
Route::get('/apply/{id}', [PropertyController::class, 'apply']);

Route::post('/submit_applicant_form', [PropertyController::class, 'submitApplication']);
