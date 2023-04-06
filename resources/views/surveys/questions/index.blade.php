@extends('app')

@section('content')
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Question
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre de réponses
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($questions as $question)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $question->question_line }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $question->total_responses }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
