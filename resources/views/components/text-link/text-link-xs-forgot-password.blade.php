@if (isset($textlink))
<a 
    {{ $attributes }} 
    class="hover:underline text-blue-500 text-xs cursor-pointer"
>
    {{ $textlink }}
</a>
@endif