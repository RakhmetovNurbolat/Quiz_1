@extends('layouts.main')

@section('page.title', 'РЕДАКТИРОВАТЬ')

@section('main.content')
        <x-title>
            {{__('РЕДАКТИРОВАТЬ')}}
            <x-slot name="link">
                <a href="{{ route('quizzes.show', $quiz->id) }}">
                    {{__('Назад')}}
                </a>
            </x-slot>
        </x-title>
        <x-quiz.form action="{{route('quizzes.update', $quiz->id)}} " method="put" :quiz=$quiz>
            <x-button type="sumbit">
                {{__('Сохранить')}}
            </x-button>
        </x-post.form>
        
@endsection
