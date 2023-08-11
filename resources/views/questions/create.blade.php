@extends('layouts.main')

@section('page.title', 'Вопроса')

@section('main.content')
    <x-card>
        <x-card-body>
            <x-title> {{__('Создание вопроса')}} </x-title>
            <x-question.form action="{{ route('questions.store') }}" method="post" :quiz=$quiz></x-question>
        </x-card-body>
    </x-card>
        
@endsection
