@props(['quiz' => null, 'question' => null, 'option'=> null])

<x-form  {{ $attributes }}>
    <input type="hidden" name="quizId" value="{{$quiz->id}}">
    <x-form-item>
        <div id="questions-container">
            
        </div>
        <button type="button" id="add-question" style="background:#0d6efd;color:white;border-radius:4px;margin-bottom:5px">Добавить вопрос</button>
        <br>
        <button type="submit" style="background:#0d6efd;color:white;border-radius:4px;margin-bottom:5px">Создать тест</button>
    </x-form-item>

    {{ $slot }}
    @once
        @push('js')
            <script src="/public/js/addOption.js"></script>
        @endpush
    @endonce
</x-form>