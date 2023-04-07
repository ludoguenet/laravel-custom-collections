<?php

declare(strict_types=1);

namespace App\Actions\Question;

use App\Collections\QuestionCollection;
use App\Models\Question;
use Illuminate\Database\Eloquent\Collection;

final class QuestionAction
{
    /**
     * @param QuestionCollection<Question> $collection
     * @return void
     */
    public function __invoke(
        QuestionCollection $collection,
    ): void {
//        $filtered = $collection->filter(static fn (Question $question) => $question->isWithoutResponses());
//        dd($collection->withoutResponses());
    }
}
