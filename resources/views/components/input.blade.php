@php
    $label = $label ?? 'Default';
    $type = $type ?? 'text';
    $name = $name ?? '';
    $value = $value ?? '';
    $class = $class ?? '';
@endphp

<div @class(['form-group', $class])>
    {{-- Balise de libellé --}}
    <label for="{{ $name }}">{{ $label }}</label>

    {{-- Champ de formulaire --}}
    <input class="form-control @error($name) is-invalid @enderror" 
           type="{{ $type }}" 
           name="{{ $name }}" 
           id="{{ $name }}" 
           value="{{ $value}}">
           
    {{-- Affichage des erreurs de validation --}}
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
