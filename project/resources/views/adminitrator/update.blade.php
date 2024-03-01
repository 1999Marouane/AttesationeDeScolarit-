@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h1>Edit Student Information</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('etudiants.update', $student->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="apoge">Apoge:</label>
                                <input type="text" class="form-control" id="apoge" name="apoge" value="{{ $student->apoge }}">
                            </div>

                            <div class="form-group">
                                <label for="cin">CIN:</label>
                                <input type="text" class="form-control" id="cin" name="cin" value="{{ $student->cin }}">
                            </div>

                            <div class="form-group">
                                <label for="cne">CNE:</label>
                                <input type="text" class="form-control" id="cne" name="cne" value="{{ $student->cne }}">
                            </div>

                            <div class="form-group">
                                <label for="prenom">First Name:</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $student->prenom }}">
                            </div>

                            <div class="form-group">
                                <label for="nom">Last Name:</label>
                                <input type="text" class="form-control" id="nom" name="nom" value="{{ $student->nom }}">
                            </div>

                            <div class="form-group">
                                <label for="dateNaiss">Date of Birth:</label>
                                <input type="date" class="form-control" id="dateNaiss" name="dateNaiss" value="{{ $student->dateNaiss }}">
                            </div>

                            <div class="form-group text-center m-3">
                                <button type="submit" class="btn btn-success text-black">Update</button>
                                <a href="{{ route('etudiants.index') }}" class="btn btn-secondary ml-2">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
