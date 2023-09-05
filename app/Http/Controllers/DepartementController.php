<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;
use App\Http\Requests\DepartementRequest;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departement = Departement::paginate(2);
        return view('Admin.departement.index',compact('departement'));
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
    public function store(DepartementRequest $request)
    {

        $departement= new Departement();
        $departement ->nom =$request->nom;

        $departement->save();

        return redirect()->route('departement.liste')->with('success',' de departement est enregistre!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departement $departement)
    {
          return view('Admin.departement.edit',compact('departement'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DepartementRequest $request, Departement $departement ){

        Try{
         $departement->nom = $request->nom;
         $departement->update();

         return redirect()->route('departement.liste')->with('valider',"Département a bien éte modifier");
        }
        catch(Exception $e) {
                dd($e);
        }

     }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Departement $departement ){
        Try{


         $departement->delete();

         return redirect()->back();
        }
        catch(Exception $e) {
                dd($e);
        }

     }

}
