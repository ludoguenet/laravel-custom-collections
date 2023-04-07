<?php

declare(strict_types=1);

namespace App\Actions\Question;

use App\Collection\Question\QuestionCollection;

class QuestionAction
{
    public function __invoke(
        QuestionCollection $questions,
    ): void {
        $filtered = $questions->withoutResponses();

        dd($filtered);
    }
}
