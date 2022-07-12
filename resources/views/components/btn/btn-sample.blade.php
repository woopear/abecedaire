@props([
    'classdiv' => null, // class div around all component
    'classbtn' => 'px-4 py-2 text-lg text-white bg-blue-500 hover:bg-blue-700 rounded-lg', // class of btn
])
{{-- slot for text of btn --}}
{{-- in div or btn, add your properties of class custom component --}}

<div class="{{ $classdiv }}">
    {{-- btn --}}
    <button 
        {{ $attributes }}
        class="{{ $classbtn }}"
    >
        {{ $slot }}
    </button>
</div>