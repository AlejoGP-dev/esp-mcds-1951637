<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username'  => 'required|min:4',
            'fullname'  => 'required|max:32',
            'email'     => 'required|unique:users,email,'.$this->id,
            'birthdate' => 'required|date',
            'gender'    => 'required',

        ];

    } else {

        return[
            'username'  => 'required|min:4',
            'fullname'  => 'required|max:32',
            'email'     => 'required|email|unique:users',
            'password'  => 'required',
            'birthdate' => 'required|date',
            'gender'    => 'required',
            'photo'     => 'required'
        ];
    }

    }

    public function messages() {
        return [
            'username.required' => 'El nombre de Usuario es requerido.',
            'username.min'      => 'El Nombre de Usuario debe tener al menos 4 caracteres.',
            'fullname.required' => 'El Nombre Completo es requerido.',
            'fullname.max'      => 'El Nombre Completo no debe ser mayor a 32 caracteres.',
            'email.required'    => 'El Correo Electronico es requerido.',
            'email.email'       => 'El Correo Electronico debe ser valido.',
            'email.unique'      => 'El Correo Electronico ya esta registrado.',
            'password.required' => 'La Contraseña es requerida.',
            'birthdate.required'=> 'La Fecha de Nacimiento es requerida.',
            'birthdate.date'    => 'La Fecha de Nacimiento es incorrecta.',
            'gender.required'   => 'El Genero es requerido.',
            'photo.required'    => 'La Foto es requerida.'

        ];
    }
}
