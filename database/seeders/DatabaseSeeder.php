<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Survey;
use App\Models\User;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(5)
            ->has(
                Survey::factory()
                   ->has(
                       Question::factory(10)
                   )
            )
            ->create();
    }
}
