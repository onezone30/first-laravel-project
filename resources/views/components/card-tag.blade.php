@props([
    'tag',
    'size' => 'text-xs'
    ])

@php

    $classes = "bg-white/30 px-3 py-1 rounded-xl {{ $size }} font-bold"

@endphp



<a href="/tag/{{ strtolower($tag->name) }}" {{ $attributes->merge(['class' => $classes]) }}>
    
    {{ ucwords($tag->name) }}
    
</a>