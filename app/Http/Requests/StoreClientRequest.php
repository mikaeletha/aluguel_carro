<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'required|string|max:20',
            'birth_date' => 'required|date',
            'driver_license_number' => 'required|string|unique:clients,driver_license_number',
            'driver_license_validity' => 'required|date',
            'password' => 'required|string|min:8',
        ];
    }

    /**
     * Mensagens personalizadas de erro.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'O nome é obrigatório.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'O e-mail fornecido não é válido.',
            'email.unique' => 'Este e-mail já está em uso.',
            'phone.required' => 'O telefone é obrigatório.',
            'birth_date.required' => 'A data de nascimento é obrigatória.',
            'driver_license_number.required' => 'O número da carteira de motorista é obrigatório.',
            'driver_license_number.unique' => 'Este número de carteira de motorista já está em uso.',
            'driver_license_validity.required' => 'A validade da carteira de motorista é obrigatória.',
            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'A senha deve ter pelo menos 8 caracteres.',
        ];
    }
}
