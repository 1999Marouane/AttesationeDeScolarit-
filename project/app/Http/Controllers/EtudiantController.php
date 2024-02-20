<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\photo;
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
        $photo = new photo();
        $etudiant= new Etudiant();

        $etudiant->apoge= $request->apoge;
        $etudiant->cin = $request->cin;
        $etudiant->cne= $request->cne;
        $etudiant->prenom= $request->prenom;
        $etudiant->nom= $request->nom;
        $etudiant->dateNaiss= $request->dateNaiss;
        $etudiant->save();


        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension    = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension ;
            $file->move('upload/empolyee/',$filename);

            $photo->path = $filename;
            $photo->etudiant_id = $etudiant->id;
        }else{
            return $request;
            $photo->image = '';
            $photo->etudiant_id = $etudiant->id;
        }


        $photo->save();


        return view('welcome')->with('success', 'Etudiant created successfully');
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
