<?php

declare(strict_types=1);

namespace App\Http\Controllers\Note;

use App\Http\Resources\GetNotesResource;
use App\Http\Services\NoteService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GetNotesController
{
    public function __invoke(Request $request, NoteService $service): AnonymousResourceCollection
    {
        $notes = $service->getNotes();
        
        return GetNotesResource::collection($notes);
    }
}