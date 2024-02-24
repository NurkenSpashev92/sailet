<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Note\GetNotesController;
use App\Http\Controllers\Note\UpdateNoteController;
use App\Http\Controllers\Note\CreateNoteController;
use App\Http\Controllers\Note\GetNoteDetailsController;
use App\Http\Controllers\Note\DeleteNoteController;


Route::post('notes/', CreateNoteController::class);
Route::get('notes', GetNotesController::class);
Route::get('notes/{id}', GetNoteDetailsController::class);
Route::put('notes/{id}', UpdateNoteController::class);
Route::delete('notes/{note}', DeleteNoteController::class);
