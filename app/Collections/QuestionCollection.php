<?php

declare(strict_types=1);

namespace App\Collections;

use App\Models\Question;
use Illuminate\Database\Eloquent\Collection;

final class QuestionCollection extends Collection
{
    public function withoutResponses(): self
    {
        return $this->filter(static fn (Question $question) => $question->isWithoutResponses());
    }
}
