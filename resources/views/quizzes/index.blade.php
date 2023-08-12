@extends('layouts.main')

@section('page.title', 'Тесты')

@section('main.content')
        <x-title>
            {{__('Тесты')}}

            @auth
                @if(auth()->user()->isAdmin()) <!-- Проверьте, что метод isAdmin() верно определен в вашей модели User -->
                    <x-slot name="right">
                        <x-button-link href="{{ route('quizzes.create') }}">
                            {{__('Создавать')}}
                        </x-button-link>
                    </x-slot>
                @endif
            @endauth
            
        </x-title>
        @empty($quizzes)
            Empty
        @else
            @foreach ($quizzes as $quiz)
                <div class="mb-3">
                    <h2 class="h6 mb-2">
                        <a href="{{ route('quizzes.show', $quiz->id) }}">
                            {{$quiz->title}}
                        </a> 
                    </h2>
                </div>
            @endforeach
            
            {{-- {{$posts->links()}} --}}
        @endempty
@endsection