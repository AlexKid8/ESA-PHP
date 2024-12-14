@extends('layouts.app')

@section('content')

    <form action="{{ route('person.store') }}" method="post">
        @csrf
        @include('person.form')
    </form>

@endsection
