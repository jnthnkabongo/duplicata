<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class savePersonne extends FormRequest
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
            'nom' => 'required|string',
            'postnom' => 'required|string',
            'prenom' => 'required|string',
            'numeronationale' => 'required|integer',
            'dateimpression' => 'required',
            'numeroserie' => 'required',
            'observation' => 'required',
            'demandeur' => 'required|string',
            'etat_id' => 'required'
        ];
    }
}
