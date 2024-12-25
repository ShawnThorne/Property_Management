<?php

use App\Models\Organization;
use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('index');
});

Route::get('/properties', function() {

    $properties = Property::all();

    return Inertia::render('Properties',[
        'properties' => $properties
    ]);
});
