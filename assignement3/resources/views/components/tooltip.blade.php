<button type="button" class="btn btn-secondary my-4" data-toggle="tooltip" data-placement="{{ $placement }}" title="{{ $text }}">
    @isset($slot)
        {{ $slot }}
    @else
        Hover me
    @endisset
</button>