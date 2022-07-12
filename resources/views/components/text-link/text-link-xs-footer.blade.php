@if (isset($textlink))
<a 
    {{ $attributes }} 
    class="hover:underline p-2 text-xs cursor-pointer"
>
    {{ $textlink }}
</a>
@endif