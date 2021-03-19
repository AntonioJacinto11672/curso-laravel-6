<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductUpdateRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'deception' => 'nullable|min:3' | 'max:1000',
            'photo' => 'required|image'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome é Um Campo Obtigatório',
            'name.min' => 'O Valor Mino de Caracteres é 3',
            'image.required' => 'Escolha Uma Imagem'
        ];
    }
}
