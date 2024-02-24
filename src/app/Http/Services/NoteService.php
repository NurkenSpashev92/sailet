<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Http\Repository\Note\NoteRepositoryInterface;
use Illuminate\Http\Request;

class NoteService
{
    public function __construct(private readonly NoteRepositoryInterface $repository)
    {
    }

    public function createNote(Request $request)
    {
        return $this->repository->create($request);
    }

    public function getNotes()
    {
        return $this->repository->getAll();
    }

    public function getNoteById(int $id)
    {
        return $this->repository->get($id);
    }
    
    public function updateNote(int $id, Request $request)
    {
        return $this->repository->update($id, $request);
    }
}