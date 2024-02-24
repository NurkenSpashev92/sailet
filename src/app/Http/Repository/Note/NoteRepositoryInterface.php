<?php

declare(strict_types=1);

namespace App\Http\Repository\Note;

use App\Http\Repository\RepositoryInterface;

interface NoteRepositoryInterface extends RepositoryInterface
{
    public function getAll();
}