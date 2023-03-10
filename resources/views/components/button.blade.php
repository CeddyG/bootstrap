@props(['type' => 'info', 'outline' => false, 'size' => null])

@php
    $btnClass = 'btn btn-'.($outline ? 'outline-' : '').$type.(is_null($size) ? '' : ' btn-'.$size);
@endphp

<button {{ $attributes->merge(['class' => $btnClass]) }} type="button">
    {{ $slot }}
</button>