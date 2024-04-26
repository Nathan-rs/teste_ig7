<?php

use App\Http\Controllers\EscolaController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TurmaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layouts.app');
})->name('home');


Route::get('/escola',[EscolaController::class, 'index'])->name('escola.show');
Route::post('/escola',[EscolaController::class, 'store'])->name('escola.create');
Route::put('/escola/{id}', [EscolaController::class, 'edit'])->name('escola.update');
Route::delete('/escola/{id}', [EscolaController::class, 'destroy'])->name('escola.delete');



Route::get('/professor',[ProfessorController::class, 'index'])->name('professor.show');
Route::post('/professor',[ProfessorController::class, 'store'])->name('professor.create');
Route::put('/professor/{id}', [ProfessorController::class, 'edit'])->name('professor.update');
Route::delete('/professor/{id}', [ProfessorController::class, 'destroy'])->name('professor.delete');


Route::get('/turma',[TurmaController::class, 'index'])->name('turma.show');
Route::post('/turma',[TurmaController::class, 'store'])->name('turma.create');
Route::put('/turma/{id}', [TurmaController::class, 'edit'])->name('turma.update');
Route::delete('/turma/{id}', [TurmaController::class, 'destroy'])->name('turma.delete');
