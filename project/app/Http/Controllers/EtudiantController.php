<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etudiant');
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'apoge' => 'required|unique:etudiants',
            'cin' => 'required',
            'cne' => 'required',
            'prenom' => 'required',
            'nom' => 'required',
            'dateNaiss' => 'required',
        ]);

        // Create a new etudiant
        Etudiant::create($request->all());

        return redirect()->route('etudiant')->with('success', 'Etudiant created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
