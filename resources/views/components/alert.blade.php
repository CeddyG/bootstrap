@props(['type' => 'info', 'message'])

<div {{ $attributes->merge(['class' => 'alert alert-'.$type]) }} role="alert">
    {{ $slot }}
</div>