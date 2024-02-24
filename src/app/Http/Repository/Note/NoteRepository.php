<?php

declare(strict_types=1);

namespace App\Http\Repository\Note;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteRepository implements NoteRepositoryInterface
{
    public function getAll()
    {
        return Note::paginate(10);
    }

    public function get(int $id)
    {
        return Note::findOrFail($id);
    }

    public function create(Request $request)
    {
        return Note::create($request->all());
    }

    public function update(int $id, Request $request)
    {
        $note = $this->get($id);
        $note->update($request->all());
        
        return $note;
    }
}