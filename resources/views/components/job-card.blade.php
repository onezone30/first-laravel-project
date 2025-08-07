@props(['job'])

<x-panel class="flex-col items-center gap-x-6">
    
    <h1 class="self-start text-sm">
        {{ $job->employer->name }}
    </h1>

    <div class="py-6">
        <a href="{{ $job->url }}" class="text-xl font-bold group-hover:text-blue-600 transition-colors duration-500">
            {{ $job->name }}
        </a>
        <p class="text-sm">
            {{ $job->schedule }} - From ${{ $job->salary }}
        </p>

    </div>



    <div class="flex justify-between items-center w-full space-x-6">

        <div class="flex space-x-2">
            @foreach ($job->tags as $tag)
                <x-card-tag :tag="$tag"/>
            @endforeach
        </div>

        <div>
            <x-employer-logo :employer="$job->employer" :width="42"/>
        </div>
    </div>

</x-panel>