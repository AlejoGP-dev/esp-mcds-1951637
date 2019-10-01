<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        if($this->method() == "PUT"){
        return [
            'name'  => 'required|min:4',
            'description'  => 'required|max:50',

        ];

    } else {

        return[
            'name'  => 'required|min:4',
            'description'  => 'required|max:50'
        ];
    }

    }

    public function messages() {
        return [
            'name.required' => 'El nombre de la categoría es requerido.',
            'name.min'      => 'El Nombre de Categoría debe tener al menos 4 caracteres.',
            'description.required' => 'La descripción de la categoría es requerida.',
            'description.max'      => 'La descripción de la categoría no debe ser mayor a 50 caracteres.'

        ];
    }
}
