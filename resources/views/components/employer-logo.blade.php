@props(['employer', 'width' => 90])



<img 
    src="{{ asset('storage/' . $employer->logo) }}" 
    alt=""
    width="{{ $width }}" 
    height="{{ $width }}" 
    class="rounded-xl object-contain object-center"
    loading="lazy">
