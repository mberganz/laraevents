<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CPF;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user.nome' => 'required',
            'user.email' => ['required', 'email', 'unique:users,email'],
            'user.cpf' => ['required', new CPF, 'unique:users,cpf'],
            'user.senha' => ['required', 'min:8', 'confirmed'],
            'phones.0.numero' => ['required', 'size:14'],
            'phones.1.numero' => ['required', 'size:15'],
            'address.cep' => 'required',
            'address.estado' => ['required', 'size:2'],
            'address.cidade' => 'required',
            'address.rua' => 'required',
            'address.numero' => ['required', 'numeric', 'integer'],
            'address.bairro' => 'required',
            'address.complemento' => ['nullable', 'max:25'],
        ];
    }

    public function attributes()
    {
        return [
            'user.nome' => 'nome',
            'user.email' => 'e-mail',
            'user.cpf' => 'CPF',
            'user.senha' => 'senha',
            'phones.0.numero' => 'telefone',
            'phones.1.numero' => 'celular',
            'address.cep' => 'CEP',
            'address.estado' => 'UF',
            'address.cidade' => 'cidade',
            'address.rua' => 'rua',
            'address.numero' => 'número',
            'address.bairro' => 'bairro',
            'address.complemento' => 'complemento',
        ];
    }
}
