@php
    $svg = file_exists($path) ? file_get_contents($path) : '';
    if ($svg) {
        $svg = preg_replace('/(fill|width|height)="[^"]*"/i', '', $svg); // remove old attrs
        $svg = str_replace('<svg', '<svg fill="' . $fill . '" width="' . $width . '" height="' . $height . '"', $svg);
    }
@endphp

@if ($svg)
    {!! $svg !!}
@else
    <p>SVG not found.</p>
@endif
