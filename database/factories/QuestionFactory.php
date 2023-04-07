<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Survey;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
final class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question_line' => fake()->sentence,
            'total_responses' => fake()->numberBetween(0, 3),
            'survey_id' => Survey::factory(),
        ];
    }
}
