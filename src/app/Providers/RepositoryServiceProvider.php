<?php

declare(strict_types=1);

namespace App\Providers;

use App\Http\Repository\Note\NoteRepository;
use App\Http\Repository\Note\NoteRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(NoteRepositoryInterface::class, NoteRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
