<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepositRequest extends FormRequest
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
            'amount' => 'required|numeric|min:0.01|max:1000',
        ];
    }

        public function messages()
    {
        return [
            'amount.required' => 'O valor do depósito é obrigatório.',
            'amount.min' => 'O valor do depósito deve ser positivo.',
            'amount.max' => 'O valor do depósito não pode exceder R$ 1.000.',
        ];
    }
}
