<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rendezvous;
use App\Models\Docteurs;
class RendezvousController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rendezvous = rendezvous::all();
        return view('rendezvous.liste', compact('rendezvous'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $docteurs = Docteurs::all();
        return view('rendezvous.ajout',compact('docteurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $request->validate([

        //     'nom'=>'required',
        //     'prenom'=>'required',
        //     'age'=>'required',
        //     'adresse'=>'required',
        //     'sexe'=>'required',
        //     'specialite'=>'required',
        //     'telephone'=>'required',
        //     'photo'=>'required',

        // ]);

        $rendezvous = new rendezvous();
        $rendezvous->nom = $request->nom;
        $rendezvous->prenom = $request->prenom;
        $rendezvous->age = $request->age;
        $rendezvous->adresse = $request->adresse;
        $rendezvous->sexe = $request->sexe;
        $rendezvous->telephone = $request->telephone ;
        $rendezvous->date_rdv = $request->date_rdv;
        $rendezvous->heure_rdv = $request->heure_rdv;
        $rendezvous->statut = $request->statut;
        $rendezvous->docteurs_id = $request->docteurs_id;


        $rendezvous->save();

        return redirect()->route('welcome')->with('status', 'Votre rendez-vous a été pris en compte.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('rendezvous.details',[

            'rendezvou' => rendezvous::find($id)

      ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rendezvous = rendezvous::find($id);
        return view('rendezvous.modifier',compact('rendezvous'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rendezvous = rendezvous::find($id);

        $rendezvous->update([
            'statut' => $request->statut,
             ]);

        return redirect()->route('rendezvous.index')->with('status', 'Un Rendez-vous a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rendezvous = rendezvous::find($id);
        $rendezvous->delete();
        return redirect()->route('rendezvous.index')->with('status', 'Rendezvous a  été supprimé avec succes.');
    }
}