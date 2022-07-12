@extends('layouts.app')

@section('content-app')
<div class="w-full flex justify-center">
    <x-box.box-rounded wBox="md:w-6/12 lg:w-4/12">
        <h3 class="text-center text-2xl font-bold text-blue-500 mb-8">Connexion Abecedaire</h3>
        <x-form.form-connexion/>
    </x-box.box-rounded>
</div>
@endsection