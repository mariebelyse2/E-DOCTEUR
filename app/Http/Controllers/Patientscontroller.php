<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\PatientControllerform_patient;
use App\Models\Patients;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = patients::all();
        return view('patients.liste', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.ajout');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'age'=>'required',
            'adresse'=>'required',
            'telephone'=>'required',
            'derniere_visite'=>'required',
            
            
            
        ]);
        $patients = new patients();
        $patients->nom = $request->nom;
        $patients ->prenom = $request->prenom;
        $patients ->age = $request->age;
        $patients ->adresse = $request->adresse;
        $patients ->telephone = $request->telephone;
        $patients ->derniere_visite = $request->derniere_visite;
        

        $patients ->save();
    
        return redirect()->route('patients.index')->with('status', ' patient a été ajouté avec succes.');
    

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        return view('patients.details',[

            'patients' => Patients::find($id)

        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $patients = Patients::find($id);
        return view('patients.modifier', compact('patients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $patients = Patients::find($id);

        $patients->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'age'=>$request->age,
            'adresse'=>$request->adresse,
            'telephone'=>$request->telephone,
            'derniere_visite'=>$request->derniere_visite
           
        ]);
    
        return redirect()->route('patients.index')->with('status', 'Patient a été modifié avec succes.');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $patients = Patients::find($id);
        $patients->delete();
        return redirect()->route('patients.index')->with('status', 'Patient a été supprimé avec succes.');

    }
}
