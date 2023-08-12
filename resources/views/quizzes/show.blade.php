@extends('layouts.main')

@section('page.title', 'Тест')

@section('main.content')
        <x-title>

            {{  $quiz->title }}

            <x-slot name="right">
                <x-button-link href="{{ route('quizzes.edit', $quiz->id) }}">
                    {{__('Редактировать')}}
                </x-button-link>
            </x-slot>

            <x-slot name="delete">
                <x-form action="{{route('quizzes.delete', $quiz->id)}} " method="delete">
                    <x-button type="submit" size="sm">
                        {{__('Удалить')}}
                    </x-button-link>
                </x-form>
            </x-slot>

            <x-slot name="question">
                <x-button-link href="{{ route('questions.create', $quiz->id) }}">
                    {{__('Добавить вопрос')}}
                </x-button-link>
            </x-slot>
  

        </x-title>
        
        <div class="mb-3">
            <h2 class="h6 mb-2">
                {!! $quiz->description !!}  
            </h2>
            <x-button-link href="{{ route('quizzes') }}">
                {{__('Назад')}}
            </x-button-link>
            <x-button-link href="{{ route('quizzes.start', $quiz->id) }}">
                {{__('Начать тест')}}
            </x-button-link>
        </div>
@endsection
