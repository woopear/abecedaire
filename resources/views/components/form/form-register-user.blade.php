@props([
    'classdiv' => 'w-fit mx-auto', // classdiv arounded all component'
    'textbtn' => 'Créer', // text of btn
    'action' => '{{ route('/register') }}', // your route for reset password of user --}}
])

<x-form.form-sample
    {{ $attributes }}
    action="{{ $action ? $action : null }}" 
    classdiv="{{ $classdiv ? $classdiv : null }}"
    textbtn="{{ $textbtn }}"
>
    {{-- for select of role for create user by admin --}}

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