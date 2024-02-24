<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    protected static ?string $password;
    
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->text(),
            'draft' => $this->faker->boolean(),
        ];
    }
}
