<?php

declare(strict_types=1);

namespace App\Http\Controllers\Note;

use App\Http\Requests\Note\StoreNoteRequest;
use App\Http\Resources\GetNoteResource;
use App\Http\Services\NoteService;

class CreateNoteController
{
    public function __invoke(StoreNoteRequest $request, NoteService $service): GetNoteResource
    {
        $notes = $service->createNote($request);

        return GetNoteResource::make($notes);
    }
}