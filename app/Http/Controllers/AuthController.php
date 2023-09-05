<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.index');
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
    public function store(Request $request)

    {
    //    dd(Hash::make('personnel'));
    //    dd(Hash::make('Admin'));
        $regles = $request->validate(
            [
                'Matricule_P'=>'required',
                'password'=>'required'
            ]);
            if(Auth::attempt($regles)){
                $request->session()->regenerate();

                $user  = Auth::user();

                if($user->name === 'DRH' ){


                    return redirect()->intended('dashboard');
                } elseif ($user->name === 'Personnel') {

                    return redirect()->route('employer');
                }


            }

            return back()->withErrors([
                'Matricule_P' => 'numero matricule  invalide',
                'password' => 'Mot de passe invalide',
            ]);
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
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
