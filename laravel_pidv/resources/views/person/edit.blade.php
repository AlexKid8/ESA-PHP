@extends('layouts.app')

@section('content')

    <form action="{{ route('person.update',$person->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        @include('person.form')
    </form>

@endsection
