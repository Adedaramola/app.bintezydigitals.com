@props(['title','value'])

<div class="flex flex-col items-center justify-center space-y-1 p-5 bg-white overflow-hidden rounded shadow">
    <small class="text-neutral-600 font-semibold">
        {{ $title }}
    </small>
    <div>
        <p class="text-2xl font-semibold">{{ $value }}</s>
    </div>
</div>
