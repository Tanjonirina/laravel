<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pointage;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('utilisateur.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function liste()
    {
        $pointage = Pointage::paginate(2);
        return view('utilisateur.pointage.index',compact('pointage') );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $heure = $request->input('type') === 'entree' ? 'heure_entre' : 'heure_sortie';

        if (Auth()->check() && Auth()->user()->Matricule_P) {
            $pointage = new Pointage();

            // Assign values to the properties
            $pointage->Matricule_P = Auth()->user()->Matricule_P;
            $pointage->date_pointage = Carbon::now();
            if ($request->input('type') === 'entree') {
                $pointage->heure_entre = Carbon::now();
                $pointage->save();
               return redirect()->back()->with('valider'," Heure d'entre  est f!!");

            } else {
                $pointage->heure_sortie = Carbon::now();

                $pointage->save();
                return redirect()->back()->with('valider'," Heure sortie  est f!!");
            }

            // Save the Pointage record to the database

        }
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
