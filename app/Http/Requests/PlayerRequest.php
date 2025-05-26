<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
     public function messages(): array{
        return[
            'dni.required'=>__('Ingrese Dni'),
            'dni.string'=>__('Ingrese cadena de texto'),
            'dni.size'=>__('Ingrese numero de Dni correcto'),
            'firtsname.string'=>__('Ingrese cadena de texto'),
            'lastname.string'=>__('Ingrese cadena de texto'),
            'office.not_in'=>__('Seleccione Oficina'),
            'born.required'=>__('Ingrese fecha de Nacimiento'),
            'legacy.not_in'=>__('Seleccione Tipo Contrato'),
        ];  
    }
    public function rules(): array
    {
        return [
            'dni'=>['required','string','size:8'],
            'firtsname'=>['required'],
            'lastname'=>['required'],
            'office'=>['not_in:0',],
            'born'=>['required'],
            'legacy'=>['not_in:0',],
        ];
    }
}
