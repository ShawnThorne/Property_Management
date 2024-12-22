<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {

    $user = User::first();

    return Inertia::render('index', [
        'user' => $user
    ]);
});
