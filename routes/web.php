<?php

use App\Http\Controllers\EscolaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layouts.app');
})->name('home');


Route::prefix('escola')->group(function() {
    Route::get('/',[EscolaController::class, 'index'])->name('escola.show');
    Route::post('/',[EscolaController::class, 'store'])->name('escola.create');
    Route::put('/{id}', [EscolaController::class, 'edit'])->name('escola.update');
});
