<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartementRequest extends FormRequest
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
            'nom'=>'required|unique:departements,nom'
        ];
    }
    public function messages(){
        return [
            'nom.unique'=>'le nom de la departement est déja utiliser!!!'
        ];
    }
}
