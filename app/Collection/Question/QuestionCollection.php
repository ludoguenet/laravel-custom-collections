<?php

declare(strict_types=1);

namespace App\Collection\Question;

use App\Models\Question;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;

/**
 * @extends EloquentCollection<int, Question>
 */
final class QuestionCollection extends EloquentCollection
{
    /**
     * @return Collection<int, array{line: string, created: string|null}>
     */
    public function withoutResponses(): Collection
    {
        return $this
            ->filter(static fn (Question $question) => $question->total_responses === 0)
            ->map(static function (Question $question) {
                return [
                    'line' => $question->question_line,
                    'created' => $question->created_at?->format('d/m/Y'),
                ];
            });
    }
}
