@extends('layouts.main')

@section('page.title', 'Quiz')

@section('main.content')
    <x-card>
      
        <x-card-body>
            <x-card-title> {{__('Создание квиза')}} </x-card-title>
            
            <x-card-body>
                <x-form action="{{ route('quizzes.store') }}" method="post">
                    <x-form-item>
                        <x-label required>{{ __('Название теста:') }}</x-label>
                        <x-input name="title" autofocus/>
                    </x-form-item>
        
                    <x-form-item>
                        <x-label >{{ __('Описание:') }}</x-label>
                        <x-trix name="description"/>
                    </x-form-item>
        
                    <x-button type="submit">
                        {{ __('Создать') }}
                    </x-button>
        
                </x-form>
            </x-card-body>
        </x-card-body>
    
    </x-card>
@endsection