<?php

declare(strict_types=1);

namespace App\Http\Controllers\Survey\Question;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class ShowController extends Controller
{
    public function __invoke(
        Request $request,
        Survey $survey,
    ): View {
        $questions = Question::query()
            ->where('survey_id', $survey->id)
            ->get();

        return view(
            view: 'surveys.questions.index',
            data: [
                'questions' => $questions,
            ],
        );
    }
}
