@extends('layouts.app')

@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-md-11 text-center">
                <h1 class="mb-4 text-2xl">Student Information</h1>
            <table class="table ">
                <thead>
                <tr>
                    <th>Apoge</th>
                    <th>CIN</th>
                    <th>CNE</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>card</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($etudiants as $student)
                    <tr>
                        <td>{{ $student->apoge }}</td>
                        <td>{{ $student->cin }}</td>
                        <td>{{ $student->cne }}</td>
                        <td>{{ $student->prenom }}</td>
                        <td>{{ $student->nom }}</td>
                        <td>{{ $student->dateNaiss }}</td>
                        <td>
                            @if($student->card)
                                <form action="{{ route('toggle.card.status', $student->card) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <button type="submit" class="btn text-black btn-{{ $student->card->verify ? 'success' : 'danger' }}">
                                        {{ $student->card->verify ? 'Ready' : 'Not Ready' }}
                                    </button>
                                </form>
                            @else
                                <span class="text-muted">No Card</span>
                            @endif
                        </td>

                        <td>
                            <a href="{{ route('etudiants.show', $student->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('etudiants.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('etudiants.destroy', $student->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger text-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection



