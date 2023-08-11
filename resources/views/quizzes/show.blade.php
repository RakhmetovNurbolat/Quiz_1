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
        </x-title>
        
        <div class="mb-3">
            <h2 class="h6 mb-2">
                {!! $quiz->content !!}  
            </h2>
            <a href="{{ route('quizzes.index') }}">
                {{__('Назад')}}
            </a>
        </div>
@endsection