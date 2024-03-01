<!-- resources/views/student.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center m-3" style="color: #007BFF; font-size: 2em; font-weight: bold;">Student Information</h1>
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
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
                @forelse ($etudiants as $student)
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
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No student records found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
