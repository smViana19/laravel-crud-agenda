<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;


Route::get('/', [AgendaController::class, 'index']);
Route::post('/store', [AgendaController::class, 'store']);
Route::delete('/delete', [AgendaController::class, 'delete']);
Route::get('/edit/{id}', [AgendaController::class, 'edit']);
Route::put('/update', [AgendaController::class, 'update']);




Route::post('/update-status/{id}', [AgendaController::class, 'updateStatus'])->name('updateStatus');
