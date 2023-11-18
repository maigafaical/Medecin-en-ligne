<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialites;
class SpecialitesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialites = Specialites::all();
        return view('Specialites.liste', compact('specialites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Specialites.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'specialite'=>'required',
            'image'=>'required',
            

        ]);

        $specialites = new Specialites();
        $specialites->specialite = $request->specialite;
        $specialites->image = $request->image->store('image','public');

        $specialites->save();

        return redirect()->route('specialites.index')->with('status', 'Une Spécialité a  été ajoutée avec succes.');

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $specialites = Specialites::find($id);
        return view('Specialites.details',compact('specialites'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $specialites = Specialites::find($id);
        return view('Specialites.modifier',compact('specialites'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $specialites = Specialites::find($id);

        $specialites->update([
            'specialite' => $request->specialite,
            'image' => $request->image,
            
        ]);

        return redirect()->route('specialites.index')->with('status', 'Une spécialité a  été modifiée avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $specialites = Specialites::find($id);
        $specialites->delete();
        return redirect()->route('specialites.index')->with('status', 'Spécialité a  été supprimée avec succes.');
    }
}
