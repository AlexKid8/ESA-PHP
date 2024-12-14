@extends('layouts.app')

@section('content')
<form action="{{ route('employee.store') }}" method="post">
    @csrf
    <label for="last_name">Nom</label>
   <input type="text" name="last_name" id="last_name" value="{{old('last_name')}}">
    <label for="first_name">Prénom</label>
    <input type="text" name="first_name" id="first_name" value="{{old('first_name')}}">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{old('email')}}">
    <button type="submit">Ajouter</button>
</form>
@endsection
