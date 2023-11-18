<?php

namespace App\Http\Controllers;
use App\Models\Rendezvous;
use App\Models\Docteurs;
use Illuminate\Http\Request;

class RendezvousController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rendezvous = Rendezvous::all();
        return view('Rendezvous.liste', compact('rendezvous'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $docteurs = Docteurs::all();
        return view('Rendezvous.ajouter',compact('docteurs'));
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
            'sexe'=>'required',
            'telephone'=>'required',
            'date_rdv'=>'required',
            'heure_rdv'=>'required',
            'docteurs_id'=>'required',
             ]);

        $rendezvous = new Rendezvous();
        $rendezvous->nom = $request->nom;
        $rendezvous->prenom = $request->prenom;
        $rendezvous->age = $request->age;
        $rendezvous->adresse = $request->adresse;
        $rendezvous->sexe = $request->sexe;
        
        $rendezvous->telephone = $request->telephone ;
        $rendezvous->date_rdv = $request->date_rdv;
        $rendezvous->heure_rdv = $request->heure_rdv;
        $rendezvous->docteurs_id = $request->docteurs_id;


        $rendezvous->save();

        return redirect()->route('welcome')->with('status', 'Votre rendez-vous a été pris en compte.');
    }

    

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rendezvous = Rendezvous::find($id);
        return view('Rendezvous.modifier',compact('rendezvous'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rendezvous = Rendezvous::find($id);

        $rendezvous->update([
            'statut' => $request->statut,
            'motif' => $request->motif,
        ]);

        return redirect()->route('rendezvous.index')->with('status', 'Un Rendez-vous a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rendezvous = Rendezvous::find($id);
        $rendezvous->delete();
        return redirect()->route('rendezvous.index')->with('status', 'Rendez-vous  supprimé avec succes.');
    }
}
