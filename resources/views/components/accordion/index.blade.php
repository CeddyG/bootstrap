<div {{ $attributes->class(['accordion', 'accordion-flush' => $flush]) }} @isset($idAccordion)id="{{ $idAccordion }}"@endisset>
    {{ $slot }}
</div>