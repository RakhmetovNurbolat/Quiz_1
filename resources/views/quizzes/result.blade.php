@extends('layouts.main')

@section('page.title', 'Тест')

@section('main.content')
        <x-card>
            <x-card-body >
                <x-title>
                    Результаты теста "{{ $quiz->title }}"
                </x-title>
                <x-card-title>
                    Ваш результат: {{ $score }}%
                </x-card-title>
            </x-card-body>
        </x-card>

@endsection