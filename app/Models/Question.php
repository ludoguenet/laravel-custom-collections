<?php

declare(strict_types=1);

namespace App\Models;

use App\Collection\Question\QuestionCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Question extends Model
{
    use HasFactory;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'question_line',
        'total_responses',
        'survey_id',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'total_responses' => 'integer',
    ];

    /**
     * @param  array<int, Question>  $models
     * @return QuestionCollection<int, Question>
     */
    public function newCollection(
        array $models = []
    ): QuestionCollection {
        return new QuestionCollection($models);
    }

    /**
     * @return BelongsTo<Survey, Question>
     */
    public function survey(): BelongsTo
    {
        return $this->belongsTo(
            related: Survey::class,
            foreignKey: 'survey_id',
        );
    }
}
