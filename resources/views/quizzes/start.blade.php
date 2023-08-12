@extends('layouts.main')

@section('page.title', 'Тест')
@php
    $start = 0;
@endphp
@section('main.content')        
    <h1>{{ $quiz->title }}</h1>

    <x-form action="{{ route('quizzes.submit', ['quiz' => $quiz]) }}" method="POST">
        
        @foreach ($quiz->questions as $question)
            <h6>{{ $question->text }}</h6>
            <ul style="list-style-type: none;">
                @foreach ($question->options as $option)
                    <li >
                        <input type="radio" name="question_{{ $question->id }}" value="{{ $option->id }}">
                        {{ $option->text }}
                    </li>
                @endforeach
            </ul>
        @endforeach

        <x-button type="submit">{{__('Завершить')}}</x-button>
    </x-form>
    
@endsection