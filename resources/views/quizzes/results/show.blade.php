@extends('layouts.main')

@section('page.title', 'Ваши результаты тестов')

@section('main.content')
    @empty($quizResults)
        <h3>Вы не сдали тест</h3>
    @else
        <h3>Ваши результаты тестов</h3>

        @foreach ($quizResults as $result)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"> Тест: {{ $result->quiz->title }}</h5>
                    <p class="card-text">Результат: {{ $result->score }}%</p>
                    <p class="card-text">Дата: {{ $result->created_at->format('d.m.Y H:i') }}</p>
                </div>
            </div>
        @endforeach
    @endempty
@endsection