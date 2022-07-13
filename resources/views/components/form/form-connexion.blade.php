@props([
    'classdiv' => 'w-fit my-4 mx-auto', // classdiv arounded all component' 
])

{{-- give the route for action of form --}}
<x-form.form-sample 
    {{ $attributes }}
    action="{{ route('login') }}"
    classdiv="{{ $classdiv ? $classdiv : null }}"
    textbtn="Se connecter"
>
    {{-- input email or identifiant --}}
    <x-input.input-sample 
        name="email" 
        type="email"
        placeholder="Identifiant"
        iconname="user"
        classdiv="mb-2"
        requried
    />

    {{-- input password --}}
    <x-input.input-sample 
        name="password" 
        type="password" 
        iconname="password"
        placeholder="Mot de passe"
        classdiv="mb-1"
        required
    />

    {{-- link for forgot password --}}
    <div class="flex justify-end mb-12">
        <x-text-link.text-link-xs-forgot-password textlink="Mot de passe oublié ?"/>
    </div>
    
</x-form.form-sample>