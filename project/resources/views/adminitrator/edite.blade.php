<!-- resources/views/student.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h1>Student Information</h1>
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
                @foreach ($etudiants as $student)
                    <tr>
                        <td>{{ $student->apoge }}</td>
                        <td>{{ $student->cin }}</td>
                        <td>{{ $student->cne }}</td>
                        <td>{{ $student->prenom }}</td>
                        <td>{{ $student->nom }}</td>
                        <td>{{ $student->dateNaiss }}</td>
                        <td>

                            <a href="{{ route('etudiants.edit', $student->id) }}" class="btn btn-warning">Edit</a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
