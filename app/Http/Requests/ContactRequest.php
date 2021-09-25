<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required | string | max:255',
            'email' => 'required | email | max:255',
            'phone' => 'required | digits:10',
            'demand' => 'required | string | max:1000'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Le champ nom est requis",
            'email.required' => "L'adresse mail est requise",
            'phone.required' => "Votre numéro de téléphone est requis",
            'demand.required' => "Votre demande est obligatoire",
            'phone.digits' => "Votre numéro doit comporter 10 chiffres",
            'demand.max' => "Votre demande ne doit pas dépasser 1000 caractères"
        ];
    }
}
