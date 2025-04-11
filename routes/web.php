<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Ruta principal redirigirá al dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Rutas del dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/posv', [DashboardController::class, 'posv'])->name('posv');
Route::get('/citas', [DashboardController::class, 'citas'])->name('citas');
Route::get('/servicios', [DashboardController::class, 'servicios'])->name('servicios');
Route::get('/medicos', [DashboardController::class, 'medicos'])->name('medicos');
