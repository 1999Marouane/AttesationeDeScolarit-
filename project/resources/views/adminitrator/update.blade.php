

@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h1>Edit Student Information</h1>
            <form action="{{ route('etudiants.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="apoge">Apoge</label>
                    <input type="text" class="form-control" id="apoge" name="apoge" value="{{ $student->apoge }}">
                </div>

                <div class="form-group">
                    <label for="cin">CIN</label>
                    <input type="text" class="form-control" id="cin" name="cin" value="{{ $student->cin }}">
                </div>

                <div class="form-group">
                    <label for="cne">CNE</label>
                    <input type="text" class="form-control" id="cne" name="cne" value="{{ $student->cne }}">
                </div>

                <div class="form-group">
                    <label for="prenom">First Name</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $student->prenom }}">
                </div>

                <div class="form-group">
                    <label for="nom">Last Name</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ $student->nom }}">
                </div>

                <div class="form-group">
                    <label for="dateNaiss">Date of Birth</label>
                    <input type="text" class="form-control" id="dateNaiss" name="dateNaiss" value="{{ $student->dateNaiss }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
