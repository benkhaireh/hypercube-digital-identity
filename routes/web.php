<?php

use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Route;

// ------------------------------------------- Front End

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/projects', function () {
    return view('index');
});

Route::get('/aboutus', function () {
    return view('index');
});

Route::get('/contactus', function () {
    return view('index');
});

// ------------------------------------------- Back End
Route::prefix('request')->group(function () {
    Route::post('/service', [RequestController::class, 'service'])->name('request.service');
});
Route::post('/contactus', [RequestController::class, 'contactus'])->name('contactus');
