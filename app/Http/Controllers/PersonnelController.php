<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Http\Requests\PersonnelRequest;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personnel = Personnel::paginate(6);
        $departements  = Departement::all();
        return view('Admin.Personnel.liste',compact('personnel','departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonnelRequest $request)
    {

        $image = $request->file('image');
        $destinationPath = 'image/';
        $profileImage = date('YmdHis').".".$image->getClientOriginalName();
        $image->move($destinationPath , $profileImage);
        $validateData['image']= $profileImage;

        $personnel= new Personnel();
        $personnel->Matricule_P = $request->Matricule;
        $personnel->nom = $request->nom;
        $personnel->prenom = $request->prenom;
        $personnel->telephone = $request->telephone;
        $personnel->Adresse = $request->Adresse;
        $personnel->departement_id = $request->departement;
        $personnel->poste = $request->poste;
        $personnel->taux_horaire = $request->horaire;
        $personnel->image = $profileImage;
        $personnel->date_embouche = $request->date;

        $personnel->save();

        return redirect()->route('employer.liste')->with('valider',"Employer a bien éte sauvegarde");

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
    public function update(Personnel $personnel)
    {
        $departements  = Departement::all();

        return view('Admin.Personnel.edit',compact('departements','personnel'));

    }



    /**
     * Remove the specified resource from storage.
     */
    public function modifier(PersonnelRequest $request ,Personnel $personnel)
    {
        try {
            $image = $request->file('image');
            $destinationPath = 'image/';
            $profileImage = date('YmdHis').".".$image->getClientOriginalName();
            $image->move($destinationPath , $profileImage);
            $validateData['image']= $profileImage;

            $personnel->Matricule_P = $request->Matricule;
            $personnel->nom = $request->nom;
            $personnel->prenom = $request->prenom;
            $personnel->telephone = $request->telephone;
            $personnel->Adresse = $request->Adresse;
            $personnel->departement_id = $request->departement;
            $personnel->poste = $request->poste;
            $personnel->taux_horaire = $request->horaire;
            $personnel->image = $profileImage;
            $personnel->date_embouche = $request->date;

            $personnel->save();

            return redirect()->route('employer.liste')->with('valider',"la modification de personnel est fait !!");
           } catch (Exception $e) {
             dd($e);
           }
    }

    public function delete(Personnel $personnel ){
        Try{


            $personnel->delete();

         return redirect()->back()->with('suprimer',"la modification de personnel est fait !!");
        }
        catch(Exception $e) {
                dd($e);
        }
    }
    public function recherche(){

        request() ->validate(
            [
                 'recherche'=>'required|min:2'
            ]);
        $recherche= request() -> input('recherche');

        $personnel = Personnel::where('nom', 'like', "%$recherche%")
                   ->orwhere('Matricule_P', 'Like' ,"%$recherche%" )
                   ->orwhere('poste', 'Like' ,"%$recherche%" )
                   ->paginate(6);

        return view('Admin.Personnel.recherche')->with('personnel', $personnel);
     }


}
