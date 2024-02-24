<?php

declare(strict_types=1);

namespace App\Http\Controllers\Note;

use App\Http\Requests\Note\UpdateNoteRequest;
use App\Http\Resources\GetNoteResource;
use App\Http\Services\NoteService;

class UpdateNoteController
{
    public function __invoke(UpdateNoteRequest $request, int $id, NoteService $service): GetNoteResource
    {
        $note = $service->updateNote($id, $request);

        return GetNoteResource::make($note);
    }
}