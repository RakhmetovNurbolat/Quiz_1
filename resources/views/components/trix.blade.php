
<input type="hidden" {{ $attributes }} id="{{ $name }}">
<trix-editor input="{{ $name }}"></trix-editor>

@once
    @push('css')
        <link rel="stylesheet" href="/public/css/trix.css">
    @endpush


    @push('js')
        <script src="/public/js/trix.js"></script>
    @endpush
@endonce