<?php

declare(strict_types=1);

namespace App\Http\Controllers\Note;

use App\Models\Note;
use Illuminate\Http\Response;

class DeleteNoteController
{
    public function __invoke(Note $note): Response
    {
        $note->delete();

        return response()->noContent();
    }
}