<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CarrosRequest extends FormRequest
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
            'modelo' => 'required|max:120',
            'ano' => 'required|max:120',
            'marca' => 'required|max:120',
            'cor' => 'required|max:120',
            'peso' => 'required|max:120',
            'potencia' => 'required|max:120',
            'descricao' => 'required|max:200',
            'valor' => 'required|decimal:2'
        ];
    }
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()
        ]));
    }

    public function messages()
    {
        return [
            'modelo.required' => 'O campo modelo é obrigatorio',
            'modelo.max' => 'o modelo deve conter no maximo 120 caracteres',
            'ano.required' => 'ano obrigatorio',
            'ano.max' => 'ano deve conter no maximo 120 caracteres',
            'marca.required' => 'marca é obrigatorio',
            'marca.max' => 'marca deve conter no maximo 120 caracteres',
            'cor.required' => 'cor obrigatorio',
            'cor.max' => 'cor deve conter no maximo 120 caracteres',
            'peso.required' => 'peso obrigatorio',
            'peso.max' => 'peso deve conter no maximo 120 caracteres',
            'potencia.required' => 'potencia obrigatorio',
            'potencia.max' => 'potencia deve conter no maximo 120 caracteres',
            'descricao.required' => 'descricao obrigatorio',
            'descricao.max' => 'descricao deve conter no maximo 120 caracteres',
            'valor.required' => 'valor obrigatorio',
            'valor.decimal' => 'formato invalido',



        ];
    }

}
