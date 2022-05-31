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
        return [
            'name' => 'min:3',
            'password' => 'min:3',
            'user_type_id' => 'required',
            'phone' => 'required|max:15|min:15',
            'cpf' => 'required|string|' . ($this->cpf_cnpj == 0 ? 'cpf' : 'cnpj'),
            'rg' => 'required',
        ];
    }
}
