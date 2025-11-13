<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canRegister' => Features::enabled(Features::registration()),
//     ]);
// })->name('home');

// Route::get('dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get("/template", function () {
    return view('template');
})->name('template');


Route::get("/home", function () {
    return view('home');
})->name('home');


require __DIR__.'/settings.php';
require __DIR__.'/user.php';
