@props(['job'])

<x-panel>

    <div>
        <x-employer-logo :employer="$job->employer"/>
    </div>


    <div class="flex flex-col flex-1">
        <a href="{{ $job->url }}" class="self-start text-xs text-white/30">
            {{ $job->employer->name }}
        </a>

        <h3 class="text-xl mt-1 font-bold group-hover:text-blue-600 transition-colors duration-500">
            {{ $job->name }}
        </h3>
        <p class="text-sm text-white/30 mt-auto">
            {{ $job->schedule }} - From ${{ $job->salary }}
        </p>

    </div>


    <div class="flex self-start gap-2">

        @foreach ($job->tags as $tag)
            <x-card-tag :tag="$tag"/>
        @endforeach

    </div>

</x-panel>
