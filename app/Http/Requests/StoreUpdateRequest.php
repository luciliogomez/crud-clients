<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateRequest extends FormRequest
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
            //
            "nome" => "required|min:3",
            "email" => "required|min:3"
        ];
    }

    public function messages()
    {
        return [
            "nome.required" => "Campo 'nome' é obrigatório",
            "nome.min" => "Campo 'nome' deve ter no mínimo 3 letras",
            "email.required" => "Campo 'email' é obrigatório"
        ];
    }
}
