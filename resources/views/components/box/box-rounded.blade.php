@props([
    'wBox' => '',
])

<section class="p-6 flex flex-col rounded-lg bg-white dark:bg-black {{ $wBox }}">
    {{ $slot }}
</section>