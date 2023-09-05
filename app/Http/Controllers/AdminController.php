<?php

namespace App\Http\Controllers;

use App\Models\Conge;
use App\Models\Personnel;
use App\Models\Departement;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalDepartements = Departement::all()->count();
        $totalEmployers= Personnel::all()->count();
        $conger= Conge::all()->count();
        $conger= Conge::all()->count();
        return view('Admin.index',compact('totalDepartements','totalEmployers','conger'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
