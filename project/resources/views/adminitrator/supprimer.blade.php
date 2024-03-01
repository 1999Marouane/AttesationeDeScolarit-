<!-- resources/views/student.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
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
                    @foreach ($etudiants as $student)
                        <tr>
                            <td>{{ $student->apoge }}</td>
                            <td>{{ $student->cin }}</td>
                            <td>{{ $student->cne }}</td>
                            <td>{{ $student->prenom }}</td>
                            <td>{{ $student->nom }}</td>
                            <td>{{ $student->dateNaiss }}</td>
                            <td>
                                <form action="{{ route('etudiants.destroy', $student->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger text-danger" onclick="return confirm('Are you sure you want to delete {{ $student->prenom }} {{ $student->nom }}?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
