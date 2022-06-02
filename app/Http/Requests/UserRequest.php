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
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'min:3',
            'password' => 'min:3',
            'email' => 'required',
            'user_type' => 'required',
            'user_permission_id' => 'required',
            'phone' => 'required|celular_com_ddd',
            'document' => 'required|string|' . ($this->user_type == 0 ? 'formato_cpf' : 'formato_cnpj'),
            'rg' => 'required',
        ];
    }

    public function validated(): array
    {
        $data = parent::validated();
        $data['password'] = bcrypt($data['password']);

        return $data;
    }
}
