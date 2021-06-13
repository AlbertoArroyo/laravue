<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroFormRequest extends FormRequest
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
            'nombre'    => 'required',
            'apellidoP'    => 'required',
            'apellidoM'    => 'required',
            'email'     => 'required|unique:users',
            'contra'    => 'required|confirmed|min:6'
        ];
    }

    public function messages(){
        return [
            'nombre.required'   => 'El nombre es requerido',
            'apellidoP.required'   => 'El Apellido Paterno es requerido',
            'apellidoM.required'   => 'El Apellido Materno es requerido',
            'email.required'   => 'El email es requerido',
            'contra.required'   => 'La contraseña es requerida',
            'contra.confirmed'  => 'Por favor confirma tu contraseña'

        ];


    }
}
