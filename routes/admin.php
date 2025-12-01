<?php

use App\Http\Controllers\Admin\CalendarioController;
use Illuminate\Support\Facades\Route;


// Todas estas rutas ya estarán bajo:
// - prefijo: /admin
// - nombre:  admin.*
// - middlewares definidos en RouteServiceProvider

// Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

//RUTA DEL CALENDARIO
Route::get('/calendario', [CalendarioController::class, 'index'])->name('admin.calendario');
