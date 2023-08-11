@props(['quiz' => null])




<x-form  {{ $attributes }} >

    <x-form-item>
        <x-label required>{{ __('Название квиза:') }}</x-label>
        <x-input name="title" value="{{$quiz->title ?? ''}}"/>
    </x-form-item>

    <x-form-item>
        <x-label >{{ __('Описание:') }}</x-label>
        <x-trix name="description" value="{{$quiz->description ?? ''}}" />
    </x-form-item>

    {{ $slot }}
    
</x-form>