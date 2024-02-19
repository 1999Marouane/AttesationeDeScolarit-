<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
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
        $etudiants = Etudiant::all();
        return view('photos.create', compact('etudiants'));
    }

    public function store(Request $request)
    {
        $photo = new photo();
        // Validate the input
        $request->validate([
            'etudiant_id' => 'required|exists:etudiants,id',
            'path' => 'required',
        ]);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension    = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension ;
            $file->move('upload/empolyee/',$filename);


            $photo->image = $filename;

        }else{
            return $request;
            $photo->image = '';
        }

        // Create a new photo
        photo::create($request->all());

        return redirect()->route('welcome.create')->with('success', 'Photo created successfully');
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
