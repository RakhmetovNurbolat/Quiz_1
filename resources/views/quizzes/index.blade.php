@extends('layouts.main')

@section('page.title', 'Тесты')

@section('main.content')
        <x-title>
            {{__('Тесты')}}

            <x-slot name="right">
                <x-button-link href="{{ route('quizzes.create') }}">
                    {{__('Создавать')}}
                </x-button-link>
            </x-slot>
        </x-title>
        @empty($quizzes)
            Empty
        @else
            @foreach ($quizzes as $quiz)
                <div class="mb-3">
                    <h2 class="h6 mb-2">
                        {{-- <a href="{{ route('quizzes.show', $quiz->id) }}">
                            {{$quiz->title}}
                        </a>  --}}
                    </h2>
                    {{-- <div class="small text-muted">
                        {{ $post->published_at->format('d.m.Y H.i.s') }}
                    </div> --}}
                </div>
            @endforeach

            {{-- {{$posts->links()}} --}}
        @endempty
@endsection