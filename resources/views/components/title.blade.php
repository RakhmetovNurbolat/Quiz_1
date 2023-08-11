<div>
    
    @isset($link)
        <div class="mb-2">
            {{ $link }}
        </div>
    @endisset
    <div class="d-flex justify-content-between">
        <div>
            <h1 class="h2 mb-5">
                {{ $slot }}
            </h1>
        </div>
        <div class="d-flex justify-content-between ">
            @isset($right)
                <div class="ms-1">
                    {{ $right }}
                </div>
            @endisset
            @isset($question)
                <div class="ms-1">
                    {{ $question }}
                </div>
            @endisset
            @isset($delete)
                <div class="ms-1">
                    {{ $delete }}
                </div>
            @endisset
        </div>
    </div>
    <x-errors/>
</div>