<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'showView'])->name('home');
Route::post('/submit', [MainController::class, 'submitForm'])->name('submit');