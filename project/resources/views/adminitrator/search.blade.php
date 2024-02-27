

@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h1>Search Results for CIN: {{ $cin }}</h1>
            @if($students->isEmpty())
                <p>No matching records found.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>Apoge</th>
                        <th>CIN</th>
                        <th>CNE</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date of Birth</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->apoge }}</td>
                            <td>{{ $student->cin }}</td>
                            <td>{{ $student->cne }}</td>
                            <td>{{ $student->prenom }}</td>
                            <td>{{ $student->nom }}</td>
                            <td>{{ $student->dateNaiss }}</td>
                            <td>
                                <a href="{{ route('etudiants.show', $student->id) }}" class="btn btn-info">Show</a>
                                <a href="{{ route('etudiants.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('etudiants.destroy', $student->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
