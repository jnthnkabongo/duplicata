<?php

namespace App\Http\Controllers;

use App\Http\Requests\savePersonne;
use App\Models\etats;
use App\Models\personnes;
use Illuminate\Http\Request;
use Exception;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //All data
        $personneduplicata = personnes::with('etat')->orderByDesc('id')->paginate('10');
        //$personneduplicata = personnes::with('etats')->orderByDesc('id')->paginate('5');
        return view('utilisateurs.liste-personne', compact('personneduplicata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(personnes $Personne, savePersonne $request)
    {
        try {
            $Personne->nom = $request->nom;
            $Personne->postnom = $request->postnom;
            $Personne->prenom = $request->prenom;
            $Personne->numeronationale = $request->numeronationale;
            $Personne->dateimpression = $request->dateimpression;
            $Personne->observation = $request->observation;
            $Personne->demandeur = $request->demandeur;
            $Personne->numeroserie = $request->numeroserie;
            $Personne->etat_id = $request->etat_id;
            $Personne->save();
            return redirect()->route('liste-personne')->with('message', 'La création d un duplicata s est effectuer avec succès');
        } catch (Exception $e) {
            dd($e);
            throw new Exception('Erreur lors de la création de la personne demandeur');
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, personnes $duplicata)
    {
        // Afficher un seul utilisateur

        return view('utilisateurs.afficher-personne', compact('duplicata'));
    }

    /**
     * Display the specified resource.
     */
    public function show(personnes $personne)
    {
        //Formulaire de création d'un éleceteur
        $etatliste = etats::all();
        return view('utilisateurs.ajouter-personne', compact('etatliste'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(personnes $personne)
    {
        //La boucle de l'etat
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, personnes $personne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(personnes $personne)
    {
        //
    }
}
