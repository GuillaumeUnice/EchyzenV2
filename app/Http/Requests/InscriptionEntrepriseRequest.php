<?php namespace App\Http\Requests;

use App\Http\Requests\RegisterRequest;

class InscriptionEntrepriseRequest extends RegisterRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return parent::authorize();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $array = parent::rules();
        $array['nom_entreprise'] = 'required|unique:entreprises,nom';
        $array['description'] = 'max:2000';
        return $array;
    }

}
