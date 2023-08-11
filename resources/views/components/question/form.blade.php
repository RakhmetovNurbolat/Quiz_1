@props(['quiz' => null, 'question' => null, 'option'=> null])

<x-form  {{ $attributes }}>
    <input type="hidden" name="quizId" value="{{$quiz->id}}">
    <x-form-item>
        <x-label required>{{ __('Текст вопроса') }}</x-label>
        <x-input name="question_text" value="{{$question->text ?? ''}}" />
    </x-form-item>

    <x-form-item>
        <x-label >{{ __('Варианты ответов') }}</x-label>
        <div id="option-container">
            <div class="m-3">
                <input type="radio" name="correct_option" value="0" checked />
                <input type="text" name="options[]" />
                <x-error/>
            </div>
        </div>
        <x-button type="button" id="add-option">Добавить вариант ответа</x-button>
        <x-button type="submit">Создать вопрос</x-button>
    </x-form-item>

    {{ $slot }}
    @once
        @push('js')
            <script src="/js/addOption.js"></script>
        @endpush
    @endonce
</x-form>