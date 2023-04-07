@extends('app')

@section('content')
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Titre du questionnaire
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre de questions
                </th>
                <th scope="col" class="px-6 py-3">
                    Auteur
                </th>
                <th scope="col" class="px-6 py-3">
                    Voir les questions
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($surveys as $survey)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $survey->title }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $survey->questions_count }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $survey->author->name }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('surveys.questions.show', $survey->id) }}">Voir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
