<?php

declare(strict_types=1);

namespace App\Http\Repository;

use Illuminate\Http\Request;

interface RepositoryInterface
{
    public function get(int $id);
    public function create(Request $request);
    public function update(int $id, Request $request);
}