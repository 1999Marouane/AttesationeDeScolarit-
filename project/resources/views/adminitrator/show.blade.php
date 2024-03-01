@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-md-11 mx-auto text-center">
            <h1 class="mb-4">Student Information</h1>
            <table class="table table-striped">
                <tbody>
                <tr>
                    <th>Apoge</th>
                    <td>{{ $student->apoge }}</td>
                </tr>
                <tr>
                    <th>CIN</th>
                    <td>{{ $student->cin }}</td>
                </tr>
                <tr>
                    <th>CNE</th>
                    <td>{{ $student->cne }}</td>
                </tr>
                <tr>
                    <th>First Name</th>
                    <td>{{ $student->prenom }}</td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td>{{ $student->nom }}</td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td>{{ $student->dateNaiss }}</td>
                </tr>
                </tbody>
            </table>
            <a href="{{ route('etudiants.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
@endsection
