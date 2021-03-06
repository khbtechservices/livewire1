@props([

])


<div
    x-data
    wire:ignore
    @trix-blur="$dispatch('input', $event.target.value)"
    class="rounded-md shadow-sm"
>

    <trix-editor
        {{$attributes}}
        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
    ></trix-editor>

</div>

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/trix@1.3.1/dist/trix.css">
@endpush

@push('scripts')
<script src="https://unpkg.com/trix@1.3.1/dist/trix.js"></script>
@endpush
