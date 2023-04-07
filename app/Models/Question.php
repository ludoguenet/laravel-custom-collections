<?php

declare(strict_types=1);

namespace App\Models;

use App\Collections\QuestionCollection;
use Illuminate\Database\Eloquent\Collection;
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
     * @return BelongsTo
     */
    public function survey(): BelongsTo
    {
        return $this->belongsTo(Survey::class);
    }

//    /**
//     * @param array $models
//     * @return Collection
//     */
//    public function newCollection(
//        array $models = [],
//    ): Collection {
//        return new QuestionCollection(
//            items: $models,
//        );
//    }

    public function newCollection(array $models = []): QuestionCollection
    {
        return new QuestionCollection($models);
    }

    /**
     * @return bool
     */
    public function isWithoutResponses(): bool
    {
        return $this->total_responses === 0;
    }
}
