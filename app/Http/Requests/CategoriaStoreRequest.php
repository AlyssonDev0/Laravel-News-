<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaStoreRequest extends FormRequest
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
            'nome' => 'required|string|max:100|min:3|unique:categorias'];
    }
    
    /* Alterando Mensagens de Erros do Request */
    public function messages()
    {
        return [
            'required' => 'A campo :attribute não pode estar vazio.',
            'nome.min' => 'O :attribute deve ser maior que :min caracteres.',
            'nome.max' => 'O :attribute deve ser menor que :max caracteres.',
            'unique' => 'A categoria '. $this->nome. ' já está cadastrada.'
        ];
    }
}
