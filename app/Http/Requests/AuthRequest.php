<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'Matricule_P'=>'required',
            'mot_de_passe'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'Matricule_P.required'=>"Matricule_P doive etre required",

            'mot_de_passe.required'=>"mot_de_passe invalide",
        ];
    }
}
