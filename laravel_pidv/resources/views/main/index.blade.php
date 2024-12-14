@extends('layouts.app')

@section('content')
    <div>
        <h3>G² est le plus beau</h3>
    </div>

    <a href="{{ route('main.about') }}" class="button">À propos</a>
@endsection
