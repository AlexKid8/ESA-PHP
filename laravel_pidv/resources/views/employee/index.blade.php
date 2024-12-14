@extends('layouts.app')

@section('content')
    <a href="{{route('employee.create')}}" role="button" class="button">Ajouter un employee</a>
    <table>
        <tr>
            <th>Last Name</th>
            <th>Fisrt Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->email }}</td>
                <td>
                    <a href="{{ route('employee.edit', $employee->id) }}" class="button">Modifier</a>
                <form action="{{ route('employee.destroy', $employee->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                    <button type="submit" class="button">Supprimer</button>
                </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
