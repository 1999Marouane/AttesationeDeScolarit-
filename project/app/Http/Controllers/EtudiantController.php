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
        $etudiants = Etudiant::all();
        return view('adminitrator.home',compact('etudiants'));
    }


    public function supprimer()
    {
        $etudiants = Etudiant::all();
        return view('adminitrator.supprimer',compact('etudiants'));
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
            $photo->path = 'upload/empolyee/'.$filename;
            $photo->etudiant_id = $etudiant->id;
        }else{
            return $request;
            $photo->image = '';
            $photo->etudiant_id = $etudiant->id;
        }


        $photo->save();


        return view('etudiant')->with('success', 'Etudiant created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Etudiant::findOrFail($id);
        return view('adminitrator.show', compact('student'));
    }

    public function edit($id)
    {
        $student = Etudiant::findOrFail($id);
        return view('adminitrator.update', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Etudiant::findOrFail($id);

        // Validate and update the student data
       /* $request->validate([
            'apoge' => 'required',
            'cin' => 'required',
            'cne' => 'required',
            'prenom' => 'required',
            'nom' => 'required',
            'dateNaiss' => 'required',
        ]);*/

        $student->update($request->all());

        return redirect()->route('etudiants.index')->with('success', 'Student updated successfully');
    }

    public function destroy($id)
    {
        $student = Etudiant::findOrFail($id);
        $student->delete();

        return redirect()->route('etudiants.index')->with('success', 'Student deleted successfully');
    }


    public function search(Request $request)
    {
        $cin = $request->input('cin');
        $students = Etudiant::where('cin', 'like', '%' . $cin . '%')->get();

        return view('adminitrator.search', compact('students', 'cin'));
    }

}
