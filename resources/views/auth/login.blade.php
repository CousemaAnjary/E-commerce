@extends('layouts.app')
@section('title', 'Se connecter')
@section('content')

    <div class="container mt-4">
        <h1>Se connecter</h1>

        <form action="{{route('login.store')}}" method="POST">
            @csrf
            @include('components.input', [
                'label' => 'E-mail',
                'type' => 'email',
                'name' => 'email',
            ])
            @include('components.input', [
                'label' => 'Mot de passe',
                'type' => 'password',
                'name' => 'password',
            ])
        </form>

        <div class="mt-4">
            {!! primary_btn('Envoyer') !!}     
        </div>

    </div>

@endsection
