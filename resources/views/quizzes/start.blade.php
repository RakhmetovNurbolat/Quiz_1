@extends('layouts.main')

@section('page.title', 'Тест')

@section('main.content')        
    <h1>{{ $quiz->name }}</h1>

    @foreach ($quiz->questions as $question)
        <h3>Вопрос: {{ $question->text }}</h3>
        <ul style="list-style-type: none;">
            @foreach ($question->options as $option)
                <li >
                    <input type="radio" name="question_{{ $question->id }}" value="{{ $option->id }}">
                    {{ $option->text }}
                </li>
            @endforeach
        </ul>
    @endforeach
@endsection