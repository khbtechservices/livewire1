@props([
    'label',
    'for',
    'error' => false,
    'helpText' => false
])

<label for="{{ $for }}" class="block text-sm font-medium text-gray-700">
    {{ $label }}
</label>

<div class="mt-1 flex rounded-md shadow-sm">
    {{ $slot }}
</div>

@if('error')
    <div class="text-red-600 text-sm mt-1">{{ $error }}</div>
@endif
