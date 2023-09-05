<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonnelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            'Matricule'=>'required|unique:personnels,Matricule_P',
            'departement'=>'required',
            'horaire'=>'required',
            'nom'=>'required|max:255',
            'prenom'=>'required|string',
            'telephone'=>'required|unique:personnels,telephone',
            'Adresse'=>'required|string',
            'poste'=>'required|string',
            'date'=>'required',
            'image'=>'required|image|mimes:jpg,jpeg,png,gif,svg',
        ];
    }

    public function messages(){
        return[
            'Matricule.required'=>'le Matricule est requis',
            'Matricule.unique'=>'le numero matricule est déja utiliser',
            'departement.required'=>'le nom departement   est requis',
            'horaire.required'=>' horaire   est requis',
            'nom.required'=>'le  nom   est requis',
            'prenom.required'=>'le  prenom   est requis',
            'telephone.required'=>'le  telephone   est requis',
            'telephone.unique'=>'le numero  telephone est déja utiliser',
            'Adresse.required'=>'l Adresse est requis',
            'poste.required'=>'l poste est requis',
            'date.required'=>'l date est requis',

        ];
    }
}
