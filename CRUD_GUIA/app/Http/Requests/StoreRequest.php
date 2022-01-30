<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'nombre' => 'required|max:12',
            'nacimiento'=> 'required',
            'telefono' => 'required|max:12|min:11',
            'aficion',
            'sexo'=> 'required',
            'descripcion' => 'required',
            'terminos' => 'required'
        ];
    }
}
