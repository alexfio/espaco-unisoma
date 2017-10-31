<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendamentoRequest extends FormRequest
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
            "nome" => "required",
            "sobrenome" => "required",
            "email" => "required|email",
            "telefone" => "telefone",
            "mensagem" => "required"
        ];
    }

    public function messages() {
        return [
            "nome.required" => "O campo Nome é obrigatório.",
            "sobrenome.required" => "O campo Sobrenome é obrigatório.",
            "email.required" => "O campo Email é obrigatório.",
            "email.email" => "O Email submetido é inválido.",
            "mensagem.required" => "O campo Mensagem é obrigatório.",
            "telefone.telefone" => "O telefone deve obedecer ao padrão: (xx) xxxxx-xxxx.",
        ];
    }
}
