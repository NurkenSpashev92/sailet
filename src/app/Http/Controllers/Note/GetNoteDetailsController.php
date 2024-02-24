<?php

declare(strict_types=1);

namespace App\Http\Controllers\Note;

use App\Http\Resources\GetNoteResource;
use App\Http\Services\NoteService;
use Illuminate\Http\Request;

class GetNoteDetailsController
{
    public function __invoke(Request $request, int $id, NoteService $service): GetNoteResource
    {
        $note = $service->getNoteById($id);
        
        return GetNoteResource::make($note);
    }
}