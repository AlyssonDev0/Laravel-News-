<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticiaStoreRequest extends FormRequest
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
            'titulo' => 'required|string|max:100|min:3|unique:noticias',
            'categoria' => 'required|string|max:100|min:3',
            'conteudo' => 'required|string|max:255|min:3',
        ];
    }

    /* Alterando Mensagens de Erro do Request*/
    public function messages()
    {
        return [
            'required' => 'O campo :attribute não pode estar vazio.',
            'min' => 'O :attribute deve ser maior que :min caracteres.',
            'max' => 'O :attribute deve ser menor que :max caracteres.',
            'titulo.unique' => 'Já existe uma notícia com o título: '. $this->titulo
        ];
    }
}
