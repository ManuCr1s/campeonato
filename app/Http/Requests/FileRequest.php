<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileRequest extends FormRequest
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
            'file.mimes'=>__('Ingrese imagen en formato JPG,JPEG,PNG'),
            'file.max'=>__('Ingrese menos de 2MB'),
        ];  
    }
    public function rules(): array
    {
        return [
              'file' => 'file|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}
