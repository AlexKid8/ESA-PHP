@extends('layouts.app')


@section('content')
    <a href="{{route('person.create')}}" role="button" class="button">Ajouter une personne</a>
    <table>
        <tr>
            <th>Last Name</th>
            <th>Fisrt Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach($people as $person)
            <tr>
                <td>{{ $person->last_name }}</td>
                <td>{{ $person->first_name }}</td>
                <td>{{ $person->email }}</td>
                <td>
                    <a href="{{ route('person.edit', $person->id) }}" class="button">Modifier</a>
                <form action="{{ route('person.destroy', $person->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                    <button type="submit" class="button">Supprimer</button>
                </form>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
