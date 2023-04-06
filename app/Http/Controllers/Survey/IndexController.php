<?php

declare(strict_types=1);

namespace App\Http\Controllers\Survey;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class IndexController extends Controller
{
    public function __invoke(
        Request $request,
    ): View {
        $surveys = Survey::query()
            ->addSelect([
                'questions_count' => Question::selectRaw("COUNT(questions.id)")->whereColumn('survey_id', 'surveys.id')
            ])
            ->with([
                'author',
                'questions',
            ])
            ->get();

        return view(
            view: 'surveys.index',
            data: [
                'surveys' => $surveys,
            ],
        );
    }
}
