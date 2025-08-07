@php

    $classes = "flex bg-white/10 p-4 rounded-lg gap-x-6 border border-transparent hover:border-blue-800 group transition-colors duration-500"

@endphp


<div {{ $attributes(['class' => $classes]) }}>

    {{ $slot }}

</div>