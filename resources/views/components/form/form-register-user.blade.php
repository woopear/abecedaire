@props([
    'classdiv' => 'w-fit mx-auto', // classdiv arounded all component'
    'textbtn' => 'Créer', // text of btn
])

<x-form.form-sample
    {{ $attributes }}
    action="{{ route('register') }}" 
    classdiv="{{ $classdiv ? $classdiv : null }}"
    textbtn="{{ $textbtn }}"
>
    {{-- select role --}}
    <x-input.select-role/>

    {{-- firstName --}}
    <x-input.input-sample 
        name="firstName"
        placeholder="Prénom"
        classdiv="mb-2"
        required
    />

    {{-- lastName --}}
    <x-input.input-sample 
        name="lastName"
        placeholder="Nom"
        classdiv="mb-2"
        required
    />

    {{-- email --}}
    <x-input.input-sample 
        name="email"
        type="email"
        placeholder="Email"
        classdiv="mb-2"
        required
    />

    {{-- password --}}
    <x-input.input-sample 
        name="password"
        type="password"
        placeholder="Mot de passe"
        classdiv="mb-12"
        required
    />

</x-form.form-sample>